<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="h-screen dark:bg-gray-900">
  <div class="pt-12 bg-gray-50 dark:bg-gray-900 sm:pt-20">
    <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
      <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-extrabold leading-9 text-gray-900 dark:text-white sm:text-4xl sm:leading-10">
        Vending Machine Performance
    </h2>
        <p class="mt-3 text-xl leading-7 text-gray-600 dark:text-gray-400 sm:mt-4">
        This dashboard provides a real-time overview of your vending machine's performance.</p> <p> Quickly identify key metrics to optimize your stock, sales, and overall machine health.        </p>
      </div>
    </div>
    <div class="pb-12 mt-10 bg-gray-50 dark:bg-gray-900 sm:pb-16">
      <div class="relative">
        <div class="absolute inset-0 h-1/2 bg-gray-50 dark:bg-gray-900"></div>
        <div class="relative max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
          <div class="max-w-4xl mx-auto">
            <dl class="bg-white dark:bg-gray-800 rounded-lg shadow-lg sm:grid sm:grid-cols-3">
              <div
                class="flex flex-col p-6 text-center border-b border-gray-100 dark:border-gray-700 sm:border-0 sm:border-r">
                <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500 dark:text-gray-400" id="item-1">
                Total sales for the day </dt>
                <dd class="order-1 text-5xl font-extrabold leading-none text-indigo-600 dark:text-indigo-100"
                  aria-describedby="item-1" id="Totalsalesfortheday">
                  30
                </dd>
              </div>
              <div
                class="flex flex-col p-6 text-center border-t border-b border-gray-100 dark:border-gray-700 sm:border-0 sm:border-l sm:border-r">
                <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500 dark:text-gray-400">
                Total Revenue                </dt>
                <dd class="order-1 text-5xl font-extrabold leading-none text-indigo-600 dark:text-indigo-100"
                  id="ToatalRevenue">
                  100 Dt
                </dd>
              </div>
              <div
                class="flex flex-col p-6 text-center border-t border-gray-100 dark:border-gray-700 sm:border-0 sm:border-l">
                <dt class="order-2 mt-2 text-lg font-medium leading-6 text-gray-500 dark:text-gray-400">
                Top selling items
                </dt>
                <dd class="order-1 text-5xl font-extrabold leading-none text-indigo-600 dark:text-indigo-100"
                  id="Topsellingitems">
                  Wavy red
                </dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
    </div>
    
    <div class="relative overflow-x-auto mx-20  ">
                <div class="flex justify-center my-10">
                    <h2 class="text-3xl font-extrabold leading-9 text-gray-900 dark:text-white sm:text-4xl sm:leading-10">
                        WHAT SELLS BEST IN VENDING MACHINE ?
                    </h2>
                </div>

                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 rounded-lg">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr class="bg-blue-900 text-white">
                            <th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Products
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Chips and pretzels
                            </td>
                            <td class="px-6 py-4">
                                Lay’s, Pringles, Ruffles, Cheetos
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Candy and gum
                            </td>
                            <td class="px-6 py-4">
                                Skittles, M&Ms, Starburst, Juicy Fruit
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Chocolate bars
                            </td>
                            <td class="px-6 py-4">
                                Snickers, Kit Kat, Milky Way, Hershey’s
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Crackers and cookies
                            </td>
                            <td class="px-6 py-4">
                                Ritz, Oreos, Cheez-Its, Nutter Butters
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Energy and granola bars
                            </td>
                            <td class="px-6 py-4">
                                Clif Bar, Nature Valley, Kind, Lara Bar
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Nuts and seeds
                            </td>
                            <td class="px-6 py-4">
                                Planters, Fritos, Sunflower seeds, almonds
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Popcorn
                            </td>
                            <td class="px-6 py-4">
                                Act II, Pop Secret, Orville Redenbacher, Smartfood
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Pastries and doughnuts
                            </td>
                            <td class="px-6 py-4">
                                Hostess, Little Debbie, Krispy Kreme, Dunkin’ Donuts
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Fruit snacks and rolls
                            </td>
                            <td class="px-6 py-4">
                                Fruit by the Foot, Fruit Roll-Ups, Welch’s, Haribo
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Jerky and meat snacks
                            </td>
                            <td class="px-6 py-4">
                                Slim Jim, Jack Link’s, Perky Jerky, Oberto
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Carbonated soft drinks
                            </td>
                            <td class="px-6 py-4">
                                Coca-Cola, Pepsi, Sprite, Mountain Dew
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Juice and juice drinks
                            </td>
                            <td class="px-6 py-4">
                                Tropicana, Minute Maid, Ocean Spray, Apple & Eve
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Water
                            </td>
                            <td class="px-6 py-4">
                                Dasani, Aquafina, Nestle, Poland Spring
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Sports drinks
                            </td>
                            <td class="px-6 py-4">
                                Gatorade, Powerade, Vitamin Water, Propel
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Energy drinks
                            </td>
                            <td class="px-6 py-4">
                                Red Bull, Monster, Rockstar, Bang
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</div>



    <script>
  const targets = [
    { element: document.getElementById('starsCount'), count: 4670, suffix: '+' },
    { element: document.getElementById('downloadsCount'), count: 80000, suffix: '+' },
    { element: document.getElementById('sponsorsCount'), count: "", suffix: '+' }
  ];

  // Find the maximum count among all targets
  const maxCount = Math.max(...targets.map(target => target.count));

  // Function to animate count-up effect
  function animateCountUp(target, duration) {
    let currentCount = 0;
    const increment = Math.ceil(target.count / (duration / 10));

    const interval = setInterval(() => {
      currentCount += increment;
      if (currentCount >= target.count) {
        clearInterval(interval);
        currentCount = target.count;
        target.element.textContent = currentCount + target.suffix;
      } else {
        target.element.textContent = currentCount;
      }
    }, 10);
  }

  // Animate count-up for each target with adjusted duration
  targets.forEach(target => {
    animateCountUp(target, maxCount / 100); // Adjust duration based on max count
  });
</script>
</x-app-layout>