<?php
require_once('Config/sessions.php');
require_once('Models/Contact.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personality Traits Test</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="min-h-screen flex items-center justify-center p-4">
    <div class="bg-[#70507E] rounded-lg shadow-md p-8 max-w-md w-full">
        <h1 class="text-3xl font-semibold font-cinema text-center text-white mb-6">Personality Traits </h1>

        <div class="mb-8 text-zinc-200 space-y-3">
            <p class="text-sm leading-relaxed">
                Discover insights about your personality through our simple assessment.
                This test helps identify key personality traits that shape how you think,
                feel, and behave in different situations.
            </p>
            <p class="text-sm leading-relaxed">
                Your responses will remain confidential and are used solely to generate
                personalized feedback about your unique personality profile.
            </p>
        </div>

        <form id="personalityForm" name="personalityForm" class="space-y-5" action="personality_traits.php" method="POST">
            <?php 
                $contacts = Contact::getAll($sessionUserId);
            ?>
            <div>
                <label for="name" class="block text-sm font-medium text-zinc-200 mb-1">Contact</label>
                <select
                    id="contact"
                    name="contact"
                    required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#ff92fb] focus:border-transparent">
                    <?php foreach ($contacts as $key => $contact) { ?>
                        <option value="<?= $contact['id']; ?>">
                            <?= ($contact['firstName'] . ' ' . $contact['lastName']); ?>
                        </option>
                    <?php } ?> 
                </select>
            </div>

            <div>
                <label for="name" class="block text-sm font-medium text-zinc-200 mb-1">Full Name</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#ff92fb] focus:border-transparent"
                    placeholder="Enter your full name">
            </div>

            <div>
                <label for="date" class="block text-sm font-medium text-zinc-200 mb-1">Date</label>
                <input
                    type="date"
                    id="date"
                    name="date"
                    required
                    class="w-full text-black px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#ff92fb] focus:border-transparent">
            </div>

            <!-- Begin Test Button (opens modal instead of submitting) -->
            <button
                type="button"
                id="beginTestBtn"
                class="w-full bg-[#38003b] hover:bg-[#4e114a] text-white font-medium py-2 px-4 rounded-md transition duration-200">
                Begin Test
            </button>
        </form>
    </div>

    <!-- Main Modal -->
    <div id="default-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg max-w-lg w-full">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Terms of Service</h3>
                <button id="closeModalBtn" class="text-gray-400 hover:text-gray-900 dark:hover:text-white text-lg font-bold">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="p-6 space-y-4 text-gray-700 dark:text-gray-300">
                <p>
                    Please read and accept the terms before starting the personality test.
                </p>
            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-4 border-t border-gray-200 dark:border-gray-600">
                <button id="acceptBtn" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    I Accept
                </button>
                <button id="declineBtn" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Decline
                </button>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        const modal = document.getElementById('default-modal');
        const beginTestBtn = document.getElementById('beginTestBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const acceptBtn = document.getElementById('acceptBtn');
        const declineBtn = document.getElementById('declineBtn');
        const personalityForm = document.getElementById('personalityForm');

        // Show modal on Begin Test click
        beginTestBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        // Close modal
        closeModalBtn.addEventListener('click', () => modal.classList.add('hidden'));
        declineBtn.addEventListener('click', () => modal.classList.add('hidden'));

        // Accept button submits the form
        acceptBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
            personalityForm.submit();
        });
    </script>
</body>
</html>
