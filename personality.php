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
        <button onclick="window.location.href='features.html'"
            class="bg-[#38003b] hover:bg-[#4e114a] text-white font-medium py-2 px-5 rounded-lg transition-all duration-300 ease-in-out transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50">
            Back 
        </button>
        <div class="flex items-center">
            <img src="./assets/zenstar2.png" alt="Logo"
                class="h-12 w-12 rounded-lg object-cover border-2 border-white/20" />
        </div>
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
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#ff92fb] focus:border-transparent" style="color:black">
                    <option value="">Select Contact</option>
                    <?php foreach ($contacts as $key => $contact) { ?>
                        <option value="<?= $contact['id']; ?>" data-birthdate="<?= $contact['birthDate']; ?>"
                            data-fullName="<?= $contact['fullName']; ?>">
                            <?= $contact['fullName']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div>
                <label for="fullName" class="block text-sm font-medium text-zinc-200 mb-1">Full Name</label>
                <input type="text" id="fullName" name="fullName" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#ff92fb] focus:border-transparent" style="color:black"
                    placeholder="Enter your full name">
            </div>

            <div>
                <label for="birthDate" class="block text-sm font-medium text-zinc-200 mb-1">Birth Date</label>
                <input type="date" id="birthDate" name="birthDate" required
                    class="w-full text-black px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#ff92fb] focus:border-transparent">
            </div>

            <!-- Begin Test Button (opens modal instead of submitting) -->
            <button type="button" id="beginTestBtn"
                class="w-full bg-[#38003b] hover:bg-[#4e114a] text-white font-medium py-2 px-4 rounded-md transition duration-200">
                Begin Test
            </button>
        </form>
    </div>

    <!-- Main Modal -->
    <div id="default-modal" class="hidden fixed inset-0 bg-[#1a0c1f] flex items-center justify-center z-50 p-0">
        <!-- Animated Background Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-[#6b46c1]/5 via-transparent to-[#553c9a]/5 animate-pulse">
        </div>

        <!-- Floating Cosmic Orbs -->
        <div class="absolute top-20 left-10 w-32 h-32 bg-[#6b46c1]/10 rounded-full blur-3xl animate-bounce"
            style="animation-duration: 8s; animation-delay: 0s;"></div>
        <div class="absolute bottom-20 right-10 w-40 h-40 bg-[#553c9a]/10 rounded-full blur-3xl animate-bounce"
            style="animation-duration: 10s; animation-delay: 2s;"></div>
        <div class="absolute top-1/2 left-1/4 w-24 h-24 bg-purple-400/5 rounded-full blur-2xl animate-pulse"
            style="animation-duration: 6s;"></div>

        <!-- Main Modal as Full Page -->
        <div class="relative w-full max-w-6xl mx-8 my-8">
            <div
                class="bg-[rgba(34,19,51,0.75)] backdrop-blur-2xl border border-[rgba(107,70,193,0.4)] rounded-3xl shadow-3xl overflow-hidden transform transition-all duration-500">

                <!-- Decorative Top Wave -->
                <div class="h-2 bg-gradient-to-r from-[#6b46c1] via-[#553c9a] to-[#6b46c1]"></div>

                <!-- Header Section -->
                <div class="p-10 pb-6 border-b border-[#553c9a]/30 bg-[rgba(34,19,51,0.6)]">
                    <div class="flex items-start justify-between">
                        <div class="flex items-center space-x-4">
                            <div
                                class="w-4 h-4 bg-gradient-to-r from-[#6b46c1] to-[#553c9a] rounded-full animate-pulse">
                            </div>
                            <h1
                                class="text-4xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-white to-purple-200 leading-tight">
                                Personality Trait
                            </h1>
                        </div>
                        <button id="closeModalBtn"
                            class="text-gray-400 hover:text-white text-4xl md:text-5xl font-light transition-all duration-300 hover:rotate-180 hover:scale-110"
                            aria-label="Close modal">
                            &times;
                        </button>
                    </div>
                    <div class="mt-4 w-24 h-1 bg-gradient-to-r from-[#6b46c1] to-transparent rounded-full"></div>
                </div>

                <!-- Body Section -->
                <div class="px-10 py-12 bg-[rgba(26,12,31,0.4)] min-h-96 flex items-center">
                    <div class="max-w-4xl mx-auto text-center">
                        <div
                            class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-[#6b46c1] to-[#553c9a] rounded-full mb-8 animate-bounce">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <p id="characterDetails"
                            class="text-xl md:text-2xl text-gray-200 leading-relaxed max-w-3xl mx-auto px-4">
                            Please read and accept the terms before starting the personality test.
                        </p>
                        <div
                            class="mt-12 w-3/4 mx-auto h-px bg-gradient-to-r from-transparent via-[#553c9a]/40 to-transparent">
                        </div>
                    </div>
                </div>

                <!-- Footer Section -->
                <div class="px-10 py-8 bg-[rgba(34,19,51,0.6)] border-t border-[#553c9a]/30">
                    <div
                        class="flex flex-col sm:flex-row items-stretch sm:items-center justify-center gap-6 max-w-3xl mx-auto">
                        <button id="declineBtn"
                            class="py-4 px-8 text-lg font-medium text-purple-200 bg-[#2f1f2f] rounded-2xl border-2 border-purple-700 hover:bg-[#3a2a3a] hover:text-white hover:shadow-2xl hover:-translate-y-1 focus:ring-4 focus:outline-none focus:ring-purple-400/50 transition-all duration-300 flex items-center justify-center space-x-3 min-w-48">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            <span>Okay</span>
                        </button>


                    </div>
                </div>
            </div>
        </div>

        <style>
            @keyframes pulse {

                0%,
                100% {
                    opacity: 0.3;
                }

                50% {
                    opacity: 0.6;
                }
            }

            .animate-pulse {
                animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
            }

            @keyframes bounce {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-20px);
                }
            }

            .animate-bounce {
                animation: bounce 4s ease-in-out infinite;
            }
        </style>
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
                
                1: "Enthusiastic spark! A natural leader who loves taking charge and doing things your way.",
                2: "Gentle and intuitive soul who feels everything deeply and keeps the peace effortlessly.",
                3: "Creative sunshine! Expressive, social, and someone who makes every moment lively.",
                4: "The stability master - disciplined, dependable, and always building success step-by-step.",
                5: "Adventure lover! Freedom-seeker who thrives on excitement, change, and new opportunities.",
                6: "Warm-hearted nurturer who brings comfort, care, and harmony wherever you go.",
                7: "Deep thinker - analytical, introspective, and drawn to mysteries and meaningful insights.",
                8: "Powerhouse of ambition! Practical, strong-willed, and unstoppable when chasing goals.",
                9: "Idealistic dreamer with a creative mind and a love for personal growth and inspiration.",
                10: "Confident commander - decisive, strategic, and naturally skilled at leading and managing.",
                11: "Visionary rebel! Independent, innovative, and always thinking ahead of your time.",
                12: "Friendly communicator - sociable, expressive, and the life of every conversation.",
                13: "Reliable and grounded - practical, steady, and someone who values stability and order.",
                14: "Energetic explorer! Adventurous, optimistic, and always ready for something new.",
                15: "Compassionate caregiver - supportive, empathetic, peaceful, and community-focused.",
                16: "Sensitive artist - creative, thoughtful, introspective, and deeply connected to emotions.",
                17: "Ambitious leader energy - confident, recognized, and always aiming higher.",
                18: "Kind-hearted humanitarian - generous, idealistic, and driven to help and uplift others.",
                19: "Strategic problem-solver - confident, visionary, and thrives on challenges.",
                20: "Diplomatic harmony-keeper - intuitive, relationship-focused, and avoids conflict naturally.",
                21: "Dynamic fireball! Enthusiastic, adventurous, and strong-willed with bold energy.",
                22: "Organized planner - responsible, disciplined, and committed to long-term success.",
                23: "Charming creator - communicative, sociable, expressive, and great at networking.",
                24: "Peaceful nurturer - caring, empathetic, family-oriented, and harmony-driven.",
                25: "Independent achiever - ambitious, decisive, goal-focused, and confidently self-led.",
                26: "Analytical mind - detail-oriented, curious, logical, and loves problem-solving.",
                27: "Magnetic personality - charismatic, expressive, and naturally attracts attention.",
                28: "Reliable rock - hardworking, disciplined, responsible, and solid with long-term planning.",
                29: "Spiritual seeker - intuitive, reflective, sensitive, and drawn to personal growth.",
                30: "Optimistic adventurer! Energetic, outgoing, and excited for new challenges.",
                31: "Creative free spirit - independent, confident, expressive, and loves leading your own path.",

            };

            return characterTraits[day] ?? "No information";
        }
    </script>
</body>

</html>