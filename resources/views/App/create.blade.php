@extends('Layout.app')
@section('content')
    <div class="m-auto w-4/5 ">
        <div class="text-center">

            <h1 class="text-5xl uppercase bold">
                إضافة مهمة
            </h1>
        </div>
        <div>
            <button 
            type="button" 
            class="bg-red-500 white block shadow-5xl mb-10 p-2 w-15
            uppercase font-bold" 
            onclick="window.location='./';">
                إلغاء
            </button>
        </div>
            <div>
                <form action="/list" method="POST">
                    @csrf
                    <div class="block">
                        
                        <input 
                            type="text"
                            class=" w-80 form-input block"
                            name="name"
                            placeholder="اسم المهمة.."
                            required>

                        <input 
                            type="color"
                            value="#FFC300"
                            class="mb-2 b-2 w-80 h-5 block" 
                            name="color"
                            id="color">

                        <textarea
                            rows="10"
                            class="block shadow-5xl mb-2 b-2 w-80 
                            placeholder-gray-400 form-textarea"
                            name="content"
                            placeholder="الوصف.."
                            required
                            ></textarea>
                        
                        <button 
                            id="colordiv"
                            type="submit" 
                            class="bg-green-500 white block shadow-5xl 
                            mb-10 p-2 w-80 uppercase font-bold" >
                                إضافة
                        </button>

                    </div>
                </form>
            </div>
    </div>
@endsection