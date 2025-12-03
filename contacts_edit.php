<?php
require('Config/sessions.php');
require_once('Models/Contact.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - Edit Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            color: white;
        }
    </style>
</head>

<body class="bg-[#1a0c1f] min-h-screen flex flex-col items-center justify-center p-4">
    <?php
    if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
        $contact = Contact::findById($_GET['id']);
    } else {
        echo "Invalid Contact ID";
        die;
    }
    ?>
    <nav class=" fixed top-0 left-0 w-full flex items-center justify-between px-4 py-3 bg-[#1a0c1f]/90 backdrop-blur-md z-50 border-b border-[rgba(107,70,193,0.3)] ">
        <button onclick="window.location.href='contacts.php'"
            class="bg-[#38003b] hover:bg-[#4e114a] text-white font-medium py-2 px-5 rounded-lg transition-all duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50">
            Back
        </button>
        <div class="flex items-center">
            <img src="./assets/zenstar2.png" alt="Logo"
                class="h-12 w-12 rounded-lg object-cover border-2 border-white/20" />
        </div>
    </nav>

    <div class="w-full max-w-2xl">

        <div
            class="bg-[rgba(34,19,51,0.7)] mt-[5rem] backdrop-blur-md border border-[rgba(107,70,193,0.3)] rounded-2xl shadow-xl p-8">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-white mb-2 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3 text-purple-300" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Edit Category
                </h1>
                <p class="text-gray-300">Update your details below</p>
            </div>

            <form action="<?= 'contacts_save.php?id=' . $contact['id']; ?>" method="POST" class="space-y-6">
                <input type="hidden" name="contactId" value="<?= $contact['id'] ?? '' ?>">
                <div>
                    <label class="block text-sm font-medium text-gray-200 mb-2">First Name : </label>
                    <input type="text" name="fname" value="<?= $contact['firstName'] ?? '' ?>"
                        class="w-full px-4 py-3 bg-[rgba(26,12,31,0.6)] border border-[rgba(107,70,193,0.4)] rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#6b46c1] focus:border-transparent transition-all" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-200 mb-2">Last Name : </label>
                    <input type="text" name="lname" value="<?= $contact['lastName'] ?? '' ?>"
                        class="w-full px-4 py-3 bg-[rgba(26,12,31,0.6)] border border-[rgba(107,70,193,0.4)] rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#6b46c1] focus:border-transparent transition-all" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-200 mb-2">Birth Date : </label>
                    <input type="date" name="dob" value="<?= $contact['birthDate'] ?? '' ?>"
                        class="w-full px-4 py-3 bg-[rgba(26,12,31,0.6)] border border-[rgba(107,70,193,0.4)] rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#6b46c1] focus:border-transparent transition-all" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-200 mb-2">Phone no. : </label>
                    <input type="text" name="phone" value="<?= $contact['phone'] ?? '' ?>"
                        class="w-full px-4 py-3 bg-[rgba(26,12,31,0.6)] border border-[rgba(107,70,193,0.4)] rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#6b46c1] focus:border-transparent transition-all"
                        placeholder="+91 12345 67890" />
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-200 mb-2">Email : </label>
                    <input type="text" name="email" value="<?= $contact['email'] ?? '' ?>"
                        class="w-full px-4 py-3 bg-[rgba(26,12,31,0.6)] border border-[rgba(107,70,193,0.4)] rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-[#6b46c1] focus:border-transparent transition-all"
                        placeholder="example@email.com" />
                </div>

                <div class="pt-4">
                    <button type="submit"
                        class="w-full py-3 px-6 bg-gradient-to-r from-[#6b46c1] to-[#553c9a] hover:from-[#553c9a] hover:to-[#44307d] text-white font-medium rounded-lg transition-all hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-[#6b46c1] focus:ring-offset-2 focus:ring-offset-[#1a0c1f]">
                        Update
                    </button>
                </div>
            </form>

            <!-- }
            }
            // else {
            //     echo '<div class="bg-red-900/50 border border-red-700 text-red-200 px-4 py-3 rounded-lg text-center">Please enter all the values.</div>';
            // }?> -->


        </div>
    </div>
</body>

</html>