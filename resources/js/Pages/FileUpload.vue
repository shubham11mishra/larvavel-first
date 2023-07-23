
<template>
  <div class="grid grid-cols-3 gap-4">
    <div class="py-12 text-white">
      <h1 class="text-2xl">All Uploaded files</h1>
    </div>
    <div class="col-span-2">
      <div class="py-12 text-white">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div @drop.prevent="onDroppedFile" @dragover.prevent="dragging = true" @dragleave.prevent="dragging = false"
            :class="[dragging ? 'border-indigo-500' : 'border-white-400', 'flex flex-col items-center py-12 px-6 rounded-md border-2 border-dashed']">
            <svg class="w-12 h-12 text-white-500" aria-hidden="true" fill="none" stroke="currentColor"
              viewBox="0 0 48 48">
              <path
                d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
            </svg>

            <p class="text-xl text-white-700">Drop files to upload</p>

            <p class="mb-2 text-white-700">or</p>

            <label
              class="inline-flex items-center px-4 text-sm font-medium border rounded shadow-sm text-white-700 border-white-300 h-9 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
              Select files
              <input ref="filesinput" @input="uploadfile" type="file" name="files" multiple class="sr-only">
            </label>

            <p class="mt-4 text-xs text-white-600">Maximum upload file size: 512MB.</p>
          </div>
        </div>
        <ul class="my-6 text-gray-800 bg-white divide-y divide-gray-500 rounded shadow">
          <li v-for="(item, index) in data.media" :key="item.key" class="flex justify-between p-3 align-middle">
            <div class="text-xs">{{ item.file.name }}</div>
            <div v-if="!item.uploaded && !item.error" class="w-1/2 bg-gray-200 rounded-full ">
              <div class="h-full pt-2 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-full"
                :style="`width: ${item.progress}%`"> </div>
            </div>
            <div v-if="item.uploaded">Done</div>
            <div v-if="item.error" class="text-xs text-red-400">
              {{ item.error }}
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, reactive } from 'vue';
import { router, useForm } from '@inertiajs/vue3';
import axios from 'axios';

const dragging = ref(false);
const data = reactive({ media: [] });
const filesinput = ref(null);
// const data = useForm({ media: [] });

function uploadfile(event) {
  uploadFiles([...event.target.files])
  filesinput.value.value = null
}

function onDroppedFile(event) {
  dragging.value = false;

  let files = [...event.dataTransfer.items]
    .filter(item => item.kind === 'file')
    .map(item => item.getAsFile())

  uploadFiles(files)
}

function uploadFiles(files) {
  files.forEach(item => {
    data.media.unshift({
      'key': Symbol(),
      'file': item,
      'progress': 0,
      'error': null,
      'uploaded': false
    })
  })



  data.media.filter(item => !item.uploaded).forEach(item => {
    let form = new FormData;
    form.append('file', item.file)

    axios.post(route('media.store'), form, {
      onUploadProgress: (progressEvent) => {
        item.progress = parseInt(Math.round((progressEvent.loaded / progressEvent.total) * 100));
      },
    }).then(() => {
      item.uploaded = true
    }).catch(error => {
      item.error = 'upload failed'
      if (error.response.status === 422) {
        item.error = error.response.data.errors.file[0];
      }
    })
  })
}

</script>

