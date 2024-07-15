<x-layout>

    <x-slot:heading>
    Job:
    </x-slot:heading>
   <h2 class="font-bold text-lg">{{ $job->title }}</h2>

   <p>
    This job pays {{ $job->salary }} per year.
   </p>

<p class="mt-6">
  <a href='/jobs/{{ $job->id }}/edit' class="block rounded-md bg-gray-900 text-base font-medium text-white px-5 py-2 ml-2">Edit job</a>
  </p>
</x-layout>