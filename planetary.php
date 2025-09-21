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
        <h1 class="text-3xl font-semibold font-cinema text-center text-white mb-6">Planetary Allies</h1>

        <div class="mb-8 text-zinc-200 space-y-3">
            <p class="text-sm leading-relaxed">
                Discover your celestial guardians. Based on your date of birth,
                this system maps your ruling planet and reveals planetary allies
                that influence your energy, personality, and life path.
            </p>
            <p class="text-sm leading-relaxed">
                Optionally include your birth time and place for a deeper astro-numerological blend —
                revealing house placements and localized planetary strengths.
            </p>
        </div>

        <form id="personalDetailsForm" name="personalDetailsForm" class="space-y-5">
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
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Planetary Trait</h3>
            <button id="closeModalBtn" class="text-gray-400 hover:text-gray-900 dark:hover:text-white text-lg font-bold">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="p-6 space-y-4 text-gray-700 dark:text-gray-300">
            <p id="characterDetails">
                Please read and accept the terms before starting the personality test.
            </p>
        </div>

        <!-- Modal footer -->
        <div class="flex items-center p-4 border-t border-gray-200 dark:border-gray-600">
            <button id="acceptBtn" class="text-white bg-[#6b3a6b] hover:bg-[#854285] focus:ring-4 focus:outline-none focus:ring-purple-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                Okay
            </button>
            <button id="declineBtn" class="py-2.5 px-5 ms-3 text-sm font-medium text-purple-100 bg-[#2f1f2f] rounded-lg border border-purple-700 hover:bg-[#3a2a3a] hover:text-white focus:ring-4 focus:outline-none focus:ring-purple-400">
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
            let characterTrait = "No information";
            switch (day) {
                case 1:
                case 10:
                case 19:
                case 28:
                    characterTrait = "Your ruling planet is SUN. Medical related, Metals related!";
                    break;
                case 2:
                case 11:
                case 20:
                case 29:
                    characterTrait = "Your ruling planet is MOON. Silver related, emotional related!";
                    break;
                case 3:
                case 12:
                case 21:
                case 30:
                    characterTrait = "Your ruling planet is JUPITER. Higher education";
                    break;
                case 4:
                case 13:
                case 22:
                case 31:
                    characterTrait = "Your ruling planet is RAHU. All types of business, All in one!";
                    break;
                case 5:
                case 14:
                case 23:
                    characterTrait = "Your ruling planet is MERCURY. Education -> primary, secondary!";
                    break;
                case 6:
                case 15:
                case 24:
                    characterTrait = "Your ruling planet is VENUS. Designing related, luxury business!";
                    break;
                case 7:
                case 16:
                case 25:
                    characterTrait = "Your ruling planet is KETU. Ocult science related work!";
                    break;
                case 8:
                case 17:
                case 26:
                    characterTrait = "Your ruling planet is SATURN. Iron related work!";
                    break;
                case 9:
                case 18:
                case 27:
                    characterTrait = "Your ruling planet is MARS. Fighting, Police, Army";
                    break;
            }

            return characterTrait;
        }
    </script>
</body>

</html>