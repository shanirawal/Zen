<?php
ini_set('display_errors', 'TRUE');
require('Config/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contacts</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#1a0c1f] min-h-screen flex flex-col items-center justify-center p-4">
    <nav class=" w-full  px-10  flex items-center justify-between ">
        <div class="flex items-center">
            <img 
                src="./assets/zenstar2.png" 
                alt="Logo" 
                class="h-12 w-12 rounded-lg object-cover border-2 border-white/20"
            />
        </div>
        <button
            onclick="window.location.href='home.php'"
            class="bg-[#38003b] hover:bg-[#4e114a] text-white font-medium py-2 px-5 rounded-lg transition-all duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50">
            Back to Home
        </button>
    </nav>

    <div class="w-full max-w-2xl">
        <div class="bg-[rgba(34,19,51,0.7)] backdrop-blur-md border border-[rgba(107,70,193,0.3)] rounded-2xl shadow-xl p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-white mb-2 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3 text-purple-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Add Contact
                </h1>
                <p class="text-gray-300">Enter your contact details below</p>
            </div>

            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-200 mb-2">First Name</label>
                    <input 
                        type="text" 
                        name="fname"
                        class="w-full px-4 py-3 bg-[rgba(26,12,31,0.6)] border border-[rgba(107,70,193,0.4)] rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#6b46c1] focus:border-transparent transition-all"
                        placeholder="Enter first name"
                    />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-200 mb-2">Last Name</label>
                    <input 
                        type="text" 
                        name="lname"
                        class="w-full px-4 py-3 bg-[rgba(26,12,31,0.6)] border border-[rgba(107,70,193,0.4)] rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#6b46c1] focus:border-transparent transition-all"
                        placeholder="Enter last name"
                    />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-200 mb-2">Birth Date</label>
                    <input 
                        type="date" 
                        name="dob"
                        class="w-full px-4 py-3 bg-[rgba(26,12,31,0.6)] border border-[rgba(107,70,193,0.4)] rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-[#6b46c1] focus:border-transparent transition-all"
                    />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-200 mb-2">Phone No.</label>
                    <input 
                        type="text" 
                        name="phone"
                        class="w-full px-4 py-3 bg-[rgba(26,12,31,0.6)] border border-[rgba(107,70,193,0.4)] rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#6b46c1] focus:border-transparent transition-all"
                        placeholder="(555) 123-4567"
                    />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-200 mb-2">Email</label>
                    <input 
                        type="email" 
                        name="email"
                        class="w-full px-4 py-3 bg-[rgba(26,12,31,0.6)] border border-[rgba(107,70,193,0.4)] rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#6b46c1] focus:border-transparent transition-all"
                        placeholder="example@email.com"
                    />
                </div>

                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <button 
                        type="submit" 
                        name="submit"
                        class="flex-1 py-3 px-6 bg-gradient-to-r from-[#6b46c1] to-[#553c9a] hover:from-[#553c9a] hover:to-[#44307d] text-white font-medium rounded-lg transition-all hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-[#6b46c1] focus:ring-offset-2 focus:ring-offset-[#1a0c1f]"
                    >
                        Submit
                    </button>
                    <button 
                        onclick="window.location.href='contacts.php'"
                         type="button"
                        name="view"
                        class="flex-1 py-3 px-6 bg-[#2f1f2f] border border-[#553c9a] text-purple-200 font-medium rounded-lg hover:bg-[#3a2a3a] hover:text-white transition-all focus:outline-none focus:ring-2 focus:ring-[#553c9a] focus:ring-offset-2 focus:ring-offset-[#1a0c1f]"
                    >
                        View Contacts
                    </button>
                </div>
            </form>
        </div>

        <!-- PHP Output Section -->
        <div class="mt-6">
            <?php
            // ---------- Insert Data ----------
            if (isset($_POST['submit'])) {
                $firstName = $_POST['fname'];
                $lastName  = $_POST['lname'];
                $birthDate = $_POST['dob'];
                $phone     = $_POST['phone'];
                $email     = $_POST['email'];

                if (!empty($firstName) && !empty($lastName) && !empty($birthDate) && !empty($phone) && !empty($email)) {
                    $conn = connectToDB();

                    
                    $insertQuery = "INSERT INTO contacts (firstName, lastName, birthDate, phone, email) 
                                    VALUES ('$firstName', '$lastName', '$birthDate', '$phone', '$email')";

                    $result = mysqli_query($conn, $insertQuery);

                    if ($result) {
                        echo '<div class="bg-green-900/50 border border-green-700 text-green-200 px-4 py-3 rounded-lg text-center">Data saved successfully!</div>';
                    } else {
                        echo '<div class="bg-red-900/50 border border-red-700 text-red-200 px-4 py-3 rounded-lg text-center">Error: ' . mysqli_error($conn) . '</div>';
                    }

                    closeConnection($conn);
                } else {
                    echo '<div class="bg-red-900/50 border border-red-700 text-red-200 px-4 py-3 rounded-lg text-center">Please enter all the values.</div>';
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
