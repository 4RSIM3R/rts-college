<div class="max-w-6xl mx-auto">
	<div class="my-4 flex flex-row justify-between items-center">
		<p>Dashboard Admin</p>
		<div class="flex flex-row space-x-4 items-center justify-center">
			<a class="text-sm hover:text-blue-600" href="<?= $_ENV['BASE_URL'] . "admin" ?>">Schedule</a>
			<a class="text-sm text-blue-500 hover:text-blue-600"
			   href="<?= $_ENV['BASE_URL'] . "admin/tenant" ?>">Tenant</a>
			<a class="text-sm  hover:text-blue-600" href="<?= $_ENV['BASE_URL'] . "admin/room" ?>">Room</a>
		</div>
		<a href="<?= $_ENV['BASE_URL'] . "admin/tenant/add" ?>"
		   class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-md text-sm px-5 py-2">
			Add Tenant
		</a>
	</div>
	<hr/>
	<form class="my-4">
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
					ID
				</th>
				<th scope="col" class="py-3 px-6">
					Name
				</th>
				<th scope="col" class="py-3 px-6">
					PIC Name
				</th>
				<th scope="col" class="py-3 px-6">
					Internal
				</th>
				<th scope="col" class="py-3 px-6">
					Action
				</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($data["result"] as $datum): ?>
				<tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
					<td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
						<?= $datum['id'] ?>
					</td>
					<td class="py-4 px-6">
						<?= $datum['name'] ?>
					</td>
					<td class="py-4 px-6">
						<?= $datum['pic_name'] ?>
					</td>
					<td class="py-4 px-6">
						<?= $datum['phone_number'] ?>
					</td>
					<td class="py-4 px-6 flex flex-row">
						<?= $datum['is_internal'] == 1 ? "YES" : "NO" ?>
					</td>
					<td class="py-4 px-6">
						<div class=" flex flex-row space-x-4">
							<a href="<?= $_ENV['BASE_URL'] . "admin/tenant/edit?id=".$datum['id'] ?>">
								<i class='bx bx-pencil'></i>
							</a>
							<a href="<?= $_ENV['BASE_URL'] . "admin/tenant/delete?id=".$datum['id'] ?>">
								<i class='bx bx-trash'></i>
							</a>
						</div>

					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>


</div>
