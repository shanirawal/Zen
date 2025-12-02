<?php
require_once('Config/sessions.php');
require_once('Models/Contact.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#1a0c1f] text-white min-h-screen">


    <main class="max-w-7xl mx-auto px-4 py-8">

        <nav class=" w-full  mb-5 flex items-center justify-between ">
            <div class="flex items-center">
                <img src="./assets/zenstar2.png" alt="Logo"
                    class="h-12 w-12 rounded-lg object-cover border-2 border-white/20" />
            </div>
            <button onclick="window.location.href='home.php'"
                class="bg-[#38003b] hover:bg-[#4e114a] text-white font-medium py-2 px-5 rounded-lg transition-all duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50">
                Back to Home
            </button>
        </nav>



        <div
            class="bg-[rgba(34,19,51,0.7)] backdrop-blur-md border border-[rgba(107,70,193,0.3)] rounded-xl shadow-xl p-6 mb-8 flex justify-between">
            <div>
                <h1 class="text-3xl font-bold text-white mb-2 flex items-center">

                    Contacts
                </h1>
                <p class="text-gray-300">Manage your personal and professional contacts in one place.</p>

            </div>

            <button onclick="window.location.href='contacts_add.php'"
                class="bg-[#ffdcfe] hover:bg-[#fff] text-[#4e114a] font-medium  px-5 rounded-lg transition-all duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50">
                Add Contact
            </button>

            <div>
                <?php
                $status = $_SESSION['contactSaveStatus'] ?? '';
                unset($_SESSION['contactSaveStatus']);

                switch ($status) {
                    case 'success':
                        $message = 'Data saved successfully!';
                        $color = 'green';
                        break;
                    case 'failed':
                        $message = 'Failed';
                        $color = 'red';
                        break;
                    default:
                        $message = '';
                        $color = '';
                        break;
                }

                if (!empty($message)): ?>
                    <div class="bg-<?= $color ?>-900/50 border border-<?= $color ?>-700 text-<?= $color ?>-200 px-4 py-3 rounded-lg text-center">
                        <?= $message ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div
            class="bg-[rgba(34,19,51,0.7)] backdrop-blur-md border border-[rgba(107,70,193,0.3)] rounded-xl shadow-xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-[#553c9a]">
                    <thead class="bg-[#553c9a]/50">
                        <tr>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-purple-200 uppercase tracking-wider">
                                Contact Id</th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-purple-200 uppercase tracking-wider">
                                First Name</th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-purple-200 uppercase tracking-wider">
                                Last Name</th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-purple-200 uppercase tracking-wider">
                                Birth Date</th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-purple-200 uppercase tracking-wider">
                                Phone</th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-purple-200 uppercase tracking-wider">
                                Email</th>
                            <th
                                class="px-6 py-3 text-left text-xs font-medium text-purple-200 uppercase tracking-wider">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#553c9a]">
                        <?php
                        $contacts = Contact::getAll($sessionUserId);
                        foreach ($contacts as $contact) { ?>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-200"><?= $contact['id'] ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white font-medium">
                                    <?= $contact['firstName'] ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white font-medium">
                                    <?= $contact['lastName'] ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-200"><?= $contact['birthDate'] ?>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-200"><?= $contact['phone'] ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-200"><?= $contact['email'] ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <a href="contacts_edit.php?id=<?= $contact['id'] ?>"
                                        class="bg-gradient-to-r from-[#6b46c1] to-[#553c9a] px-3 py-1 rounded text-sm font-medium text-white hover:bg-gradient-to-r hover:from-[#553c9a] hover:to-[#44307d] transition-all">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>