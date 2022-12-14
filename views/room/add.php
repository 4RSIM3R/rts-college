<div class="max-w-6xl mx-auto">

	<form action="<?= $_ENV['BASE_URL'] . "admin/room/post" ?>" method="post" class="p-12 flex flex-col space-y-4">
		<p>Add Room</p>
		<div>
			<label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room Name</label>
			<input type="text" id="name" name="name"
				   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
				   required autocomplete="off">
		</div>
		<div>
			<label for="location" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Room Location</label>
			<input type="text" id="location" name="location"
			       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2"
			       required autocomplete="off">
		</div>
		<div class="w-96">
			<button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-md text-sm px-5 py-2">
				Submit
			</button>
		</div>
	</form>

</div>
