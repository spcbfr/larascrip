<x-app>
    <div class=" flex flex-col justify-center items-center h-screen content-center">
        <h2 class="text-center font-semibold text-xl">Login</h2>
        <form method="POST" action="/login" class="flex gap-4 w-1/5 flex-col">
            @csrf
            <div>
                <label for="CIN" class="block text-sm font-medium leading-6 text-gray-900">CIN</label>
                <div class="mt-1">
                    <input type="text" name="CIN" maxlength="11" inputmode="numeric" required
                        class="block rounded-md border-0 w-full py-1.5 text-gray-900 user-invalid:ring-red-500 user-invalid:ring-2 shadow-sm ring-1 ring-inset outline-none px-2 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('CIN')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                <div class="mt-1">
                    <input type="tel" name="phone" placeholder="XXXXXXXX" maxlength="8" inputmode="numeric"
                        required
                        class="block rounded-md w-full border-0 py-1.5  user-invalid:ring-2 user-invalid:ring-red-500  text-gray-900 shadow-sm ring-1 ring-inset outline-none px-2 ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('phone')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
                @error('details')
                    <span class="text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <button
                class="bg-indigo-600 text-white py-1.5 hover:bg-indigo-500 rounded-md shadow-sm text-sm font-medium">Submit</button>
        </form>
    </div>
</x-app>
