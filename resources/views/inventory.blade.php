<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inventory') }}
        </h2>
    </x-slot>
                          
   
<div class="py-12">
    <div class="max-w-7xl  mx-auto sm:px-6 lg:px-8">   
       <div class="relative flex flex-col w-full h-full text-slate-700 bg-white shadow-md rounded-xl bg-clip-border">
           <div class="relative mx-4 mt-4 overflow-hidden text-slate-700 bg-white rounded-none bg-clip-border">
               <div class="flex items-center justify-between ">
                   <div>
                       <h3 class="text-lg font-semibold text-slate-800">Inentory List</h3>
                       <p class="text-slate-500">Review each item before edit</p>
                   </div>
               <div class="flex flex-col gap-2 shrink-0 sm:flex-row">
                   <button
                   class="rounded border border-slate-300 py-2.5 px-3 text-center text-xs font-semibold text-slate-600 transition-all hover:opacity-75 focus:ring focus:ring-slate-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                   type="button">
                   View All
                   </button>
                   <button
                   class="flex select-none items-center gap-2 rounded bg-slate-800 py-2.5 px-4 text-xs font-semibold text-white shadow-md shadow-slate-900/10 transition-all hover:shadow-lg hover:shadow-slate-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                   type="button">
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                       stroke-width="2" class="w-4 h-4">
                       <path
                       d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                       </path>
                   </svg>
                   Add Product
                   </button>
               </div>
               </div>
           
           </div>
           {{-- start  thead --}}
           <div class="p-0 overflow-scroll">
               <table class="w-full mt-4 text-left table-auto min-w-max">
               <thead>
                   <tr class="transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
                   <th class="p-2">Product ID</th>
                   <th class="p-2">Product Name</th>
                   <th class="p-2">Category</th>
                   <th class="p-2">Image</th>
                   <th class="p-2">Stock</th>
                   <th class="p-2">Price</th>
                   <th class="p-2">Selling Price</th>
                   <th class="p-2">Units ordered</th>
                   <th class="p-2">Units Sold</th>
                   <th class="p-2">Supplier</th>
                   <th class="p-2 ">Date</th>
                   <th class="p-2">User</th>
                   <th class="p-2" colspan="2">Actions</th>
                   </tr>
               </thead>
           {{-- end  thead --}}

               <tbody>
                @foreach ($products as $product)
                   <tr>
                   <td class="p-4 border-b border-slate-200">#{{ $product->id }}</td>
                   <td class="p-4 border-b border-slate-200">{{ $product->name }}</td>
                   <td class="p-4 border-b border-slate-200 ">
                    <p class="bg-sky-300 p-1 rounded-lg">{{ $product->category->name }}</pc>
                    </td>
                   <td class="p-4 border-b border-slate-200"><img src="{{ asset('storage/' . $product->image) }}" alt="not yet" width="50" height="50"></td>
                   <td class="p-4 border-b border-slate-200">{{ $product->stock }}</td>
                   <td class="p-4 border-b border-slate-200">$ {{ $product->buying_price }}</td>
                   <td class="p-4 border-b border-slate-200">$ {{ $product->selling_price }}</td>
                   <td class="p-4 border-b border-slate-200">{{ $product->units_ordered }}</td>
                   {{-- cannot be more that orderd --}}
                   <td class="p-4 border-b border-slate-200">{{ $product->units_sold }}</td>
                   <td class="p-4 border-b border-slate-200">{{ $product->supplier }}</td>
                   <td class="p-4 border-b border-slate-200 text-xs">{{ $product->created_at }}</td>
                   <td class="p-4 border-b border-slate-200">{{ $product->user->name }}</td>
                   
                   
                   
                   <td class="p-4 border-b border-slate-200">
                       <button
                       class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-slate-900 transition-all hover:bg-slate-900/10 active:bg-slate-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                       type="button">
                       <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                           class="w-4 h-4">
                           <path
                               d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                           </path>
                           </svg>
                       </span>
                       </button>
                   </td>
                   <td class="p-4 border-b border-slate-200">
                    <button
                    class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-slate-900 transition-all hover:bg-slate-900/10 active:bg-slate-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                    <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
                    </span>
                </button>
                </td>
                @endforeach
            </tr>
  
                   
               
               </tbody>
               </table>
           </div>
           <div class="flex items-center justify-between p-3">
               <p class="block text-sm text-slate-500">
               Page 1 of 10
               </p>
               <div class="flex gap-1">
               <button
                   class="rounded border border-slate-300 py-2.5 px-3 text-center text-xs font-semibold text-slate-600 transition-all hover:opacity-75 focus:ring focus:ring-slate-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                   type="button">
                   Previous
               </button>
               <button
                   class="rounded border border-slate-300 py-2.5 px-3 text-center text-xs font-semibold text-slate-600 transition-all hover:opacity-75 focus:ring focus:ring-slate-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                   type="button">
                   Next
               </button>
               </div>
           </div>
           </div>
        </div >
   </div>
</x-app-layout>