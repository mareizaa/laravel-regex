@vite('resources/css/app.css')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
                        First Name
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Jane" name="name">
                    @if($errors->has('name'))
                        <p class="text-red-700 text-xs italic">{{ $errors->first('name') }}</p>
                    @endif
                    </div>
                    <div class="md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                        Last Name
                    </label>
                    <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="Doe" name="last_name">
                    @if($errors->has('last_name'))
                        <p class="text-red-700 text-xs italic">{{ $errors->first('last_name') }}</p>
                    @endif
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-2">
                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                            Email
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="Doe" name="email">
                        @if($errors->has('email'))
                            <p class="text-red-700 text-xs italic">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                            Type Document
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="Doe" name="type_document">
                        @if($errors->has('type_document'))
                            <p class="text-red-700 text-xs italic">{{ $errors->first('type_document') }}</p>
                        @endif
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
                            Identification
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-last-name" type="text" placeholder="Doe" name="identification">
                        @if($errors->has('identification'))
                            <p class="text-red-700 text-xs italic">{{ $errors->first('identification') }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <button class="bg-blue-500 rounded-md hover:bg-blue-700 text-white font-bold py2 px-4">Crear</button>
        </form>
    </div>
</div>
