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

<body class="min-h-screen flex flex-col items-center justify-center ">

<nav class=" w-full  px-10 mb-5 flex items-center justify-between ">
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

    <div class="bg-[#70507E] rounded-lg shadow-md p-8 max-w-md w-full">
        <h1 class="text-3xl font-semibold font-cinema text-center text-white mb-6">Personality Traits</h1>

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

        <form id="personalityForm" name="personalityForm" class="space-y-5">
            <?php
            $contacts = Contact::getAll($sessionUserId);
            ?>
            <div>
                <label for="contactDropdown" class="block text-sm font-medium text-zinc-200 mb-1">Contact</label>
                <select id="contactDropdown" name="contactDropdown" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#ff92fb] focus:border-transparent">
                    <option value="">Select Contact</option>
                    <?php foreach ($contacts as $key => $contact) { ?>
                        <option value="<?= $contact['id']; ?>" data-birthdate="<?= $contact['birthDate']; ?>" data-fullName="<?= $contact['fullName']; ?>">
                            <?= $contact['fullName']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div>
                <label for="fullName" class="block text-sm font-medium text-zinc-200 mb-1">Full Name</label>
                <input
                    type="text"
                    id="fullName"
                    name="fullName"
                    required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#ff92fb] focus:border-transparent"
                    placeholder="Enter your full name">
            </div>

            <div>
                <label for="birthDate" class="block text-sm font-medium text-zinc-200 mb-1">Birth Date</label>
                <input
                    type="date"
                    id="birthDate"
                    name="birthDate"
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
        <div class="bg-white dark:bg-[#2f1a2f] rounded-lg shadow-lg max-w-lg w-full">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Personality Trait</h3>
            <button
                id="closeModalBtn"
                class="text-gray-400 hover:text-gray-900 dark:hover:text-white text-lg font-bold"
            >
                &times;
            </button>
            </div>

            <!-- Modal body -->
            <div class="p-6 space-y-4 text-gray-700 dark:text-gray-300">
            <p id="characterDetails">
                Please read and accept the terms before starting the personality test.
            </p>
            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-4 border-t border-gray-200 dark:border-gray-600">
            <button
                id="acceptBtn"
                class="text-white bg-[#6b3a6b] hover:bg-[#854285] focus:ring-4 focus:outline-none focus:ring-purple-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
            >
                Okay
            </button>
            <button
                id="declineBtn"
                class="py-2.5 px-5 ms-3 text-sm font-medium text-purple-100 bg-[#2f1f2f] rounded-lg border border-purple-700 hover:bg-[#3a2a3a] hover:text-white focus:ring-4 focus:outline-none focus:ring-purple-400"
            >
                Close
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

        const contactDropdown = document.getElementById('contactDropdown');

        // Add an event listener for the change event
        contactDropdown.addEventListener('change', () => {
            // Get the selected option
            const selectedOption = contactDropdown.options[contactDropdown.selectedIndex];

            // Get the data attribute (data-info in this example)
            const dataValue = selectedOption.getAttribute('data-info');

            document.getElementById('birthDate').value = selectedOption.getAttribute('data-birthdate');
            document.getElementById('fullName').value = selectedOption.getAttribute('data-fullName');
        });

        // Show modal on Begin Test click
        beginTestBtn.addEventListener('click', () => {
            let bDate = document.getElementById('birthDate').value;
            if (bDate) {
                bDate = new Date(bDate);
                setCharacterDetails('');
                setCharacterDetails(
                    getCharacterDetails(bDate.getUTCDate())
                );
            }

            modal.classList.remove('hidden');
        });

        // Close modal
        closeModalBtn.addEventListener('click', () => modal.classList.add('hidden'));
        declineBtn.addEventListener('click', () => modal.classList.add('hidden'));

        // Accept button submits the form
        acceptBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

        function setCharacterDetails(value) {
            document.getElementById('characterDetails').innerHTML = value;
        }

        function getCharacterDetails(day) {
            const characterTraits = {
                1: "Enthusiastic, natural leader, confident, independent, enjoys taking initiative.",
                2: "Intuitive, empathetic, cooperative, sensitive to others' feelings, values harmony.",
                3: "Creative, expressive, sociable, fun-loving, enjoys sharing ideas and connecting with people.",
                4: "Disciplined, responsible, hardworking, organized, values stability and structure.",
                5: "Adventurous, freedom-loving, curious, dynamic, loves exploring new opportunities.",
                6: "Caring, nurturing, compassionate, family-oriented, strives to help others.",
                7: "Analytical, introspective, thoughtful, enjoys research and deep thinking, values privacy.",
                8: "Ambitious, practical, goal-oriented, strong-willed, motivated to achieve success.",
                9: "Idealistic, imaginative, broad-minded, creative thinker, focuses on personal growth.",
                10: "Confident, decisive, strategic, good at leadership and managing responsibilities.",
                11: "Visionary, independent, innovative, likes to take risks, forward-thinking.",
                12: "Friendly, sociable, communicative, expressive, values friendships and social connections.",
                13: "Practical, reliable, methodical, disciplined, prefers stability and consistency.",
                14: "Energetic, adventurous, versatile, enjoys travel and new experiences, optimistic.",
                15: "Compassionate, supportive, empathetic, family and community-focused, peace-loving.",
                16: "Creative, artistic, sensitive, introspective, enjoys reflection and thoughtful pursuits.",
                17: "Ambitious, confident, goal-driven, enjoys leadership roles and recognition.",
                18: "Generous, kind, idealistic, values helping others and contributing to society.",
                19: "Confident, strategic, problem-solving, enjoys challenges, visionary thinker.",
                20: "Diplomatic, intuitive, relationship-focused, avoids conflicts, seeks harmony.",
                21: "Dynamic, enthusiastic, adventurous, strong-willed, enjoys excitement and variety.",
                22: "Organized, disciplined, responsible, long-term planner, values security and order.",
                23: "Creative, sociable, communicative, charming, enjoys expressing ideas and networking.",
                24: "Caring, empathetic, nurturing, family-oriented, strives to create harmony.",
                25: "Independent, ambitious, goal-oriented, confident in making decisions, pragmatic.",
                26: "Analytical, detail-oriented, introspective, enjoys problem-solving and learning.",
                27: "Charismatic, creative, social, expressive, naturally attracts attention and followers.",
                28: "Responsible, hardworking, reliable, disciplined, values stability and long-term planning.",
                29: "Sensitive, spiritual, intuitive, reflective, seeks personal growth and understanding.",
                30: "Optimistic, energetic, outgoing, adventurous, enjoys new challenges and experiences.",
                31: "Independent, creative, confident, adventurous, enjoys freedom and taking initiative.",
            };

            return characterTraits[day] ?? "No information";
        }
    </script>
</body>

</html>