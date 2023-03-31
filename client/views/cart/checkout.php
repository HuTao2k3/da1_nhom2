<h1 class="text-center font-bold text-[35px] py-7">Pay</h1>
<div class="min-h-screen p-7 leading-loose mx-auto max-w-5xl">
  <form method="post" action="<?= BASE_URL . 'pay-cart'?>" class="max-w-5xl m-4 p-4 bg-white rounded shadow-xl">
    <p class="text-gray-800 font-medium">Billing Information</p>
    <div class="">
      <label class="block mb-1 text-sm text-gray-600" for="cus_name">Name</label>
      <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" name="name" type="text" required placeholder="Your Name" aria-label="Name">
    </div>
    <div class="mt-2">
      <label class="block text-sm mb-1 text-gray-600" for="cus_email">Email</label>
      <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_email" name="email" type="text" required placeholder="Your Email" aria-label="Email">
    </div>
    <div class="mt-2">
      <label class=" block text-sm mb-1 text-gray-600" for="cus_email">Address</label>
      <input class="w-full px-2 py-2  text-gray-700 bg-gray-200 rounded" id="cus_email" name="address" type="text" required placeholder="Street" aria-label="Email">
    </div>
      <label class="block text-sm mb-1 text-gray-600" for="cus_name">Phone</label>
      <input class="w-full px-2 py-2 text-gray-700 bg-gray-200 rounded" id="cus_name" name="phone" type="number" required  placeholder="Your phone">
      <button type="submit" class="px-7 py-1 mt-5 text-white rounded bg-blue-500">Buy</button>
    </div>
  </form>
</div>

<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">