<div class="max-w-6xl mx-auto">

	<form action="<?= $_ENV['BASE_URL'] . "admin/update?id=" . $data["data"]["id"] ?>" method="post"
	      class="p-12 flex flex-col space-y-4">
		<p>Edit Schedule</p>
		<div>
			<label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
			<input type="date" id="date" name="date" value="<?= $data["data"]["date"] ?>"
			       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
			       placeholder="John" required>
		</div>
		<div class="flex flex-row space-x-4">
			<div class="w-full">
				<label for="start_at" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start
					At</label>
				<input type="time" id="start_at" name="start_at" value="<?= $data["data"]["start_at"] ?>"
				       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
				       placeholder="John" required>
			</div>
			<div class="w-full">
				<label for="end_at" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End At</label>
				<input type="time" id="end_at" name="end_at" value="<?= $data["data"]["end_at"] ?>"
				       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
				       placeholder="John" required>
			</div>
		</div>
		<div>
			<label for="room_id" class="block mb-2 text-sm font-medium text-gray-900">Room</label>
			<select id="room_id" name="room_id"
			        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
				<?php foreach ($data["rooms"] as $room): ?>
					<option value="<?= $room["id"] ?>" <?= $data["data"]["room_id"] == $room["id"] ? "selected" : "" ?> ><?= $room["name"] ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div>
			<label for="tenant_id" class="block mb-2 text-sm font-medium text-gray-900">Tenant</label>
			<select id="tenant_id" name="tenant_id"
			        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
				<?php foreach ($data["tenants"] as $tenant): ?>
					<option value="<?= $tenant["id"] ?>" <?= $data["data"]["tenant_id"] == $tenant["id"] ? "selected" : "" ?>  ><?= $tenant["name"] ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<div class="w-96">
			<button type="submit"
			        class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-md text-sm px-5 py-2">
				Submit
			</button>
		</div>
	</form>

</div>
