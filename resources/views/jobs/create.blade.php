<x-layout>

    <x-slot:heading>
    Create Job:
    </x-slot:heading>
   
<form method="POST" action="/jobs">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new job.</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">We just need a handful of details from you.</p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
         <x-form-label for="title">Title:</x-form-label>
            <div class="mt-2">
              <x-form-input type="text" name="title" id="title" placeholder="Programmer" required/>

            </div>

           <x-form-error name="title"/>
          </div>

          
        </div>




        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <div class="sm:col-span-4">
              {{-- <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
               --}}

               <x-form-label for="salary">Salary</x-form-label>
              <div class="mt-2">
                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                 
                  <input type="text" name="salary" id="salary"  class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="5,00,000">
                </div>
              </div>
              @error('salary')
                  <p class="text-sm text-red-500 font-semibold">{{ $message }}</p>
                      
                  @enderror  
            </div>
          </div>

{{-- @if ($errors->any())
<ul>
    @foreach($errors->all() as $error)
    <li class="text-red-500 italic">{{ $error }}</li>
    @endforeach
</ul>
    
@endif --}}

      </div>
  
     
      
    </div>
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </form>
  

</x-layout>