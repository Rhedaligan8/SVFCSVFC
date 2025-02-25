@extends('layouts.href')
@extends('layouts.app')
<style>
    body {
        
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>


<div class="flex justify-center items-center h-full max-h-screen">
<div class="w-full  p-8 bg-green-300 rounded-lg shadow-md ">


<h2 class="text-3xl font-semibold text-center text-black-700 mb-12">SVFC  Clinic <br>Appointment System</h2>
            <form action="" method="POST">
                @csrf

                <x-bladewind.input 
                    name="text" 
                    placeholder="Enter username" 
                    type="email" 
                    
                    class="mt-4"
                />
                <x-bladewind.input 
                    name="password" 
                    placeholder="Enter password" 
                    type="password" 
                    
                    class="mt-4"
                />
                <div class="flex items-center justify-between mt-4">
                <label class="flex items-center">
                        <input type="checkbox" name="remember" class="mr-2">
                        <span class="text-sm text-gray-600">Remember Me</span>
                    </label>
                    <x-bladewind.button class="flex justify-center items-center bg-white mx-4">Login</x-bladewind.button>
                    <a href="#" class="text-sm text-blue-600 hover:underline">Forgot Password?</a>
                    
                </div>
                </div>
                
            </form>
            
</div>
</div>
