<div class="max-w-6xl mx-auto">

	<div class="my-4 flex flex-row justify-between items-center">
		<p>Room Tenant System</p>
		<div class="relative max-w-xl">
			<form>
				<div class="flex">
					<input type="search" id="search-dropdown"
					       class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-md border-gray-50 border-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700"
					       placeholder="Search Room" required>
				</div>
			</form>
		</div>
		<a href="mailto:someone@example.com" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-md text-sm px-5 py-2">
			Ask For Rent
		</a>
	</div>
	<hr/>
	<div class="max-w-lg my-4">
		<p class="text-sm">
			Si Luna (Siap, Lugas, Amanah)
		</p>
	</div>

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
			<?php foreach ($data["result"] as $datum): ?>
				<tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
					<td class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
						<?= $datum['room_name']  ?> <?= $datum['location']  ?>
					</td>
					<td class="py-4 px-6">
						<?= $datum['date'] ?>
					</td>
					<td class="py-4 px-6">
						<?= $datum['start_at'] ?> - <?= $datum['end_at'] ?>
					</td>
					<td class="py-4 px-6 flex flex-row">
						<span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded"><?= $datum['tenant_name'] ?></span>
						<span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded"><?= $datum['internal'] == 1 ? "INTERNAL" : "EXTERNAL" ?></span>
					</td>
					<td class="py-4 px-6">
						<a href="https://wa.me/<?= $datum['phone_number'] ?>">
							<i class='bx bxl-whatsapp text-xl'></i>
						</a>
					</td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>


</div>
