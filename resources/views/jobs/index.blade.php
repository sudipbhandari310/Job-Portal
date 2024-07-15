<x-layout>

    <x-slot:heading>
      Here are the available job opportunities:
    </x-slot:heading>
   <div class="space-y-4">
    @foreach ($jobs as $job )

        <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">

      

          <div>
        <strong>{{ $job['title'] }}: </strong> {{ $job['salary'] }} per year

          </div>
        </a>
     
    
    @endforeach

    <div>
      {{ $jobs->links() }}
    </div>
  </div>
</x-layout>