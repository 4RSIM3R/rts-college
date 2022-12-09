<div class="max-w-6xl mx-auto">

	<div class="my-4 flex flex-row justify-between items-center">
		<p>Room Tenant System</p>
		<button type="button" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-md text-sm px-5 py-2">
			Ask For Rent
		</button>
	</div>
	<hr/>
	<div class="max-w-sm my-4">
		<p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolore ex ipsa
			praesentium quod, sequi.</p>
	</div>

	<form>
		<div class="flex">
			<div class="relative w-full">
				<input type="search" id="search-dropdown"
				       class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-md border-gray-50 border-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700"
				       placeholder="Search Room" required>
				<button type="submit"
				        class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-md border border-blue-700 hover:bg-blue-800">
					<svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
					     xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
						      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
					</svg>
					<span class="sr-only">Search</span>
				</button>
			</div>
		</div>
	</form>


	<div class="overflow-x-auto relative my-8">
		<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
			<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
			<tr>
				<th scope="col" class="py-3 px-6">
					Room
				</th>
				<th scope="col" class="py-3 px-6">
					Date
				</th>
				<th scope="col" class="py-3 px-6">
					Duration
				</th>
				<th scope="col" class="py-3 px-6">
					Tenant
				</th>
				<th scope="col" class="py-3 px-6">
					Action
				</th>
			</tr>
			</thead>
			<tbody>
			<tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
				<td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
					Ruang LSI 1, 2, 3 - Gedung Sipil
				</td>
				<td class="py-4 px-6">
					<?= date('d F y', time()) ?>
				</td>
				<td class="py-4 px-6">
					07:00 - 15:00
				</td>
				<td class="py-4 px-6 flex flex-row">
					<span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">WSEC</span>
					<span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">INTERNAL</span>
				</td>
				<td class="py-4 px-6">
					<i class='bx bxl-whatsapp text-xl'></i>
				</td>
			</tr>
			</tbody>
		</table>
	</div>


</div>
