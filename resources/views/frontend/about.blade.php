<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Globe Arc</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .globe-arc {
      width: 100%;
      height: 200px;
      background: radial-gradient(closest-side, transparent 70%, #0018a8 71%);
      border-radius: 50%/100%;
      position: relative;
      overflow: hidden;
    }

    .marker {
      position: absolute;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .dot {
      width: 12px;
      height: 12px;
      background-color: #0018a8;
      border-radius: 50%;
      z-index: 10;
    }

    .line {
      width: 2px;
      height: 100px;
      background-color: #d1d5db; /* tailwind's gray-300 */
      margin-bottom: 8px;
    }
  </style>
</head>
<body class="bg-white text-center pt-20">

  <!-- Globe Arc -->
  <div class="relative globe-arc mx-auto max-w-6xl">
    <!-- Marker: Kosovo -->
    <div class="marker left-[10%] bottom-[-20px]">
      <div class="line"></div>
      <div class="dot"></div>
      <div class="text-blue-900 font-semibold mt-2">Kosovo<br><span class="text-sm font-normal text-gray-500">Europe</span></div>
    </div>

    <!-- Marker: Rwanda -->
    <div class="marker left-[30%] bottom-[-20px]">
      <div class="line"></div>
      <div class="dot"></div>
      <div class="text-blue-900 font-semibold mt-2">Rwanda<br><span class="text-sm font-normal text-gray-500">Africa</span></div>
    </div>

    <!-- Marker: Maldives -->
    <div class="marker left-[50%] bottom-[-20px]">
      <div class="line"></div>
      <div class="dot"></div>
      <div class="text-blue-900 font-semibold mt-2">Maldives<br><span class="text-sm font-normal text-gray-500">Asia</span></div>
    </div>

    <!-- Marker: Bolivia -->
    <div class="marker left-[70%] bottom-[-20px]">
      <div class="line"></div>
      <div class="dot"></div>
      <div class="text-blue-900 font-semibold mt-2">Bolivia<br><span class="text-sm font-normal text-gray-500">Latam</span></div>
    </div>
  </div>

</body>
</html>
