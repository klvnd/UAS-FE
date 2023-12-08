<?php
include("koneksi.php");

// Query untuk mendapatkan data terakhir
$queryLatest = "SELECT * FROM data_mobil ORDER BY id_mobil DESC LIMIT 1";
$resultLatest = $koneksi->query($queryLatest);

// Query untuk mendapatkan seluruh data
$queryAll = "SELECT * FROM data_mobil";
$resultAll = $koneksi->query($queryAll);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_mobil = $_POST["name"];
    $harga_mobil = $_POST["harga"];

    $foto_mobil = "default_filename.jpg"; 

    $deskripsi = $_POST["deskripsi"];

    // Insert data into the database
    $insertQuery = "INSERT INTO data_mobil (nama_mobil, harga_mobil, foto_mobil, deskripsi) VALUES ('$nama_mobil', '$harga_mobil', '$foto_mobil', '$deskripsi')";
    $insertResult = $koneksi->query($insertQuery);

    // Check if the insertion was successful
    if ($insertResult) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $koneksi->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-950">
    <header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xs">
                <img src="img/logo.png" class="mr-3 h-12 sm:h-9 mt-1" alt="Flowbite Logo" />
                <div class="justify-between items-center w-full lg:flex lg:w-auto lg:order-1">
                    <h1 class="font-bold mx-4">Admin</h1>
                    <!-- Logout button -->
                    <a href="index.php">
                        <button class="text-red-700 hover:text-red focus:ring-2 focus:ring-red-500 focus:outline-none rounded-md px-3 py-1.5 text-sm bg-red-200 dark:bg-red-700 dark:hover:bg-red-600 dark:text-white">
                            Logout
                        </button>
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <div class="mx-10 mt-8">
        <!-- Modal toggle -->
        <div class="flex justify-end mb-4">
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" class="flex items-center justify-center px-5 py-2.5 block text-white bg-blue-700 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                <svg class="h-3.5 w-3.5 mr-2 -ml-1 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>  
                Add New
            </button>
        </div>

        <div id="crud-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-screen-xl max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-blue-500">
                        <h3 class="text-lg font-semibold text-gray-900 ">
                            Tambah Data Mobil
                        </h3>
                        <button type="button" class="text-gray-500 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-red" data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="p-4 md:p-5">
                        <div class="grid gap-4 mb-4 grid-cols-2">
                            <div class="col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Foto Mobil</label>
                                <input class="block w-full text-sm border rounded-lg cursor-pointer" id="file_input" type="file">
                            </div>
                            <div class="col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Mobil</label>
                                <input type="text" name="name" id="name" class="bg-white border border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 " placeholder="Nama Mobil" required="">
                            </div>
                            <div class="col-span-2">
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Harga Mobil</label>
                                <input type="text" name="harga" id="harga" class="bg-white border border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 " placeholder="Harga Mobil Rp" required="">
                            </div>
                            <div class="col-span-2">
                                <label for="deskripsi" class="block mb-2 text-sm font-medium text-gray-900 ">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" class="bg-white border border-blue-500 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5" placeholder="Deskripsi mobil..."></textarea>
                            </div>
                        </div>
                        <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                            Add
                        </button>
                    </form>
                </div>
            </div>
        </div> 

        <div class="bg-white relative shadow-md sm:rounded-lg rounded-lg overflow-hidden">
            <div class="overflow-x-auto max-h-[500px]">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-50 uppercase bg-blue-900">
                        <tr>
                            <th scope="col" class="lg:px-4 lg:py-3 px-2 py-3">No</th>
                            <th scope="col" class="lg:px-4 lg:py-3 px-2 py-3">Foto Mobil</th>                                
                            <th scope="col" class="lg:px-4 lg:py-3 px-2 py-3">Nama Mobil</th>
                            <th scope="col" class="lg:px-4 lg:py-3 px-2 py-3">Harga Mobil</th>
                            <th scope="col" class="lg:px-4 lg:py-3 px-2 py-3">Deskripsi</th>
                            <th scope="col" class="lg:px-4 lg:py-3 px-2 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Fetch data into an associative array
                        $dataArray = $resultAll->fetch_all(MYSQLI_ASSOC);

                        // Loop through each row in the result set
                        foreach ($dataArray as $index => $row) {
                            ?>
                            <tr class="border-b hover:bg-gray-100">
                                <th scope="row" class="px-4 py-3 px-2 py-3 font-medium text-gray-900 whitespace-nowrap"><?php echo $index + 1; ?></th>
                                <td class="px-4 py-3 px-2 py-3"><img src="img/<?php echo $row['foto_mobil']; ?>" alt="" class="w-40"></td>
                                <td class="px-4 py-3 px-2 py-3"><?php echo $row['nama_mobil']; ?></td>
                                <td class="px-4 py-3 px-2 py-3"><?php echo $row['harga_mobil']; ?></td>
                                <td class="px-4 py-3 px-2 py-3"><?php echo $row['deskripsi']; ?></td>
                                <td class="px-4 py-3 px-2 py-3">
                                    <button type="button" class="text-red-700 border-2 border-red-700 hover:bg-red-700 hover:text-white ml-2 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z"/>
                                        </svg>
                                        <span class="sr-only">Icon description</span>
                                    </button>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>        
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
