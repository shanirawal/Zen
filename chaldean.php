<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaldean Numerology Calculator</title>
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
        <h1 class="text-3xl font-semibold font-cinema text-center text-white mb-6">Chaldean Numerology</h1>

        <div class="mb-8 text-zinc-200 space-y-3">
            <p class="text-sm leading-relaxed">
                Chaldean Numerology is an ancient mystical system that assigns vibrational values to letters in your name.
                It reveals hidden energies and life patterns tied to your destiny.
            </p>
            <p class="text-sm leading-relaxed">
                Enter your full legal name (First + Last) exactly as it appears on your birth certificate
                to calculate your core Chaldean Number.
            </p>
        </div>

        <form class="space-y-5">
            <div>
                <label for="fullName" class="block text-sm font-medium text-zinc-200 mb-1">Full Name (First + Last)</label>
                <input
                    type="text"
                    id="fullName"
                    name="fullName"
                    required
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#ff92fb] focus:border-transparent"
                    placeholder="e.g. Rahul Sharma">
            </div>
            <div>
                <label for="date" class="block text-sm font-medium text-zinc-200 mb-1">Date</label>
                <input
                    type="date"
                    id="birthDate"
                    name="birthDate"
                    required

                    class="w-full text-black px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#ff92fb]focus:border-transparent">
            </div>
            <button
                type="button"
                id="calculateMyNumberBtn"
                class="w-full bg-[#38003b] hover:bg-[#4e114a] text-white font-medium py-2 px-4 rounded-md transition duration-200">
                Calculate My Number
            </button>
        </form>
    </div>

    <!-- Main Modal -->
    <div id="default-modal" class="hidden fixed inset-0 bg-[#1a0c1f] flex items-center justify-center z-50 p-0">
    <!-- Animated Background Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-[#6b46c1]/5 via-transparent to-[#553c9a]/5 animate-pulse"></div>
    
    <!-- Floating Cosmic Orbs -->
    <div class="absolute top-20 right-10 w-32 h-32 bg-[#553c9a]/10 rounded-full blur-3xl animate-bounce" style="animation-duration: 7s; animation-delay: 0.5s;"></div>
    <div class="absolute bottom-20 left-10 w-40 h-40 bg-[#6b46c1]/10 rounded-full blur-3xl animate-bounce" style="animation-duration: 9s; animation-delay: 1.5s;"></div>
    <div class="absolute top-1/3 left-1/3 w-20 h-20 bg-yellow-400/5 rounded-full blur-xl animate-pulse" style="animation-duration: 5s;"></div>

    <!-- Main Modal as Full Page -->
    <div class="relative w-full max-w-6xl mx-8 my-8">
        <div class="bg-[rgba(34,19,51,0.75)] backdrop-blur-2xl border border-[rgba(107,70,193,0.4)] rounded-3xl shadow-3xl overflow-hidden transform transition-all duration-500">

            <!-- Decorative Top Wave -->
            <div class="h-2 bg-gradient-to-r from-[#6b46c1] via-[#553c9a] to-[#6b46c1]"></div>

            <!-- Header Section -->
            <div class="p-10 pb-6 border-b border-[#553c9a]/30 bg-[rgba(34,19,51,0.6)]">
                <div class="flex items-start justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="w-4 h-4 bg-gradient-to-r from-yellow-400 to-[#6b46c1] rounded-full animate-pulse"></div>
                        <h1 class="text-4xl md:text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-yellow-100 to-purple-200 leading-tight">
                            Chaldean Trait
                        </h1>
                    </div>
                    <button
                        id="closeModalBtn"
                        class="text-gray-400 hover:text-white text-4xl md:text-5xl font-light transition-all duration-300 hover:rotate-180 hover:scale-110"
                        aria-label="Close modal"
                    >
                        &times;
                    </button>
                </div>
                <div class="mt-4 w-24 h-1 bg-gradient-to-r from-yellow-400 to-transparent rounded-full"></div>
            </div>

            <!-- Body Section -->
            <div class="px-10 py-12 bg-[rgba(26,12,31,0.4)] min-h-96 flex items-center">
                <div class="max-w-4xl mx-auto text-center">
                    <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-yellow-400 to-[#553c9a] rounded-full mb-8 animate-pulse">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white drop-shadow-lg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <p id="characterDetails" class="text-xl md:text-2xl text-gray-200 leading-relaxed max-w-3xl mx-auto px-4">
                        Please read and accept the terms before starting the personality test.
                    </p>
                    <div class="mt-12 w-3/4 mx-auto h-px bg-gradient-to-r from-transparent via-yellow-400/40 to-transparent"></div>
                </div>
            </div>

            <!-- Footer Section -->
            <div class="px-10 py-8 bg-[rgba(34,19,51,0.6)] border-t border-[#553c9a]/30">
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-center gap-6 max-w-3xl mx-auto">
                    <button
                        id="declineBtn"
                        class="py-4 px-8 text-lg font-medium text-yellow-100 bg-[#2f1f2f] rounded-2xl border-2 border-yellow-700 hover:bg-[#3a2a3a] hover:text-white hover:shadow-2xl hover:-translate-y-1 focus:ring-4 focus:outline-none focus:ring-yellow-400/50 transition-all duration-300 flex items-center justify-center space-x-3 min-w-48"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                        <span>Okay</span>
                    </button>
                    
                    
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes pulse {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 0.6; }
        }
        .animate-pulse {
            animation: pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        .animate-bounce {
            animation: bounce 4s ease-in-out infinite;
        }
    </style>
</div>

    <!-- JavaScript -->
    <script>
        const modal = document.getElementById('default-modal');
        const calculateMyNumberBtn = document.getElementById('calculateMyNumberBtn');
        const closeModalBtn = document.getElementById('closeModalBtn');
        const acceptBtn = document.getElementById('acceptBtn');
        const declineBtn = document.getElementById('declineBtn');

        // Chaldean mapping
        const chaldeanMap = {
            'A': 1,
            'I': 1,
            'J': 1,
            'Q': 1,
            'Y': 1,
            'B': 2,
            'K': 2,
            'R': 2,
            'C': 3,
            'G': 3,
            'L': 3,
            'S': 3,
            'D': 4,
            'M': 4,
            'T': 4,
            'E': 5,
            'H': 5,
            'N': 5,
            'X': 5,
            'U': 6,
            'V': 6,
            'W': 6,
            'O': 7,
            'Z': 7,
            'F': 8,
            'P': 8,
        };

        // Example Birth–Name Compatibility Matrix
        const compatibilityMatrix = {
            1: {
                1: "Excellent",
                2: "Neutral",
                3: "Friendly",
                4: "Challenging",
                5: "Supportive",
                6: "Neutral",
                7: "Spiritual",
                8: "Material",
                9: "Powerful"
            },
            2: {
                1: "Balanced",
                2: "Excellent",
                3: "Supportive",
                4: "Friendly",
                5: "Challenging",
                6: "Neutral",
                7: "Spiritual",
                8: "Material",
                9: "Powerful"
            },
            3: {
                1: "Friendly",
                2: "Challenging",
                3: "Excellent",
                4: "Neutral",
                5: "Supportive",
                6: "Friendly",
                7: "Spiritual",
                8: "Material",
                9: "Powerful"
            },
            4: {
                1: "Challenging",
                2: "Supportive",
                3: "Neutral",
                4: "Excellent",
                5: "Friendly",
                6: "Challenging",
                7: "Spiritual",
                8: "Material",
                9: "Powerful"
            },
            5: {
                1: "Supportive",
                2: "Friendly",
                3: "Challenging",
                4: "Neutral",
                5: "Excellent",
                6: "Supportive",
                7: "Spiritual",
                8: "Material",
                9: "Powerful"
            },
            6: {
                1: "Neutral",
                2: "Supportive",
                3: "Friendly",
                4: "Challenging",
                5: "Supportive",
                6: "Excellent",
                7: "Spiritual",
                8: "Material",
                9: "Powerful"
            },
            7: {
                1: "Spiritual",
                2: "Friendly",
                3: "Challenging",
                4: "Neutral",
                5: "Supportive",
                6: "Challenging",
                7: "Excellent",
                8: "Material",
                9: "Powerful"
            },
            8: {
                1: "Material",
                2: "Challenging",
                3: "Friendly",
                4: "Supportive",
                5: "Neutral",
                6: "Friendly",
                7: "Spiritual",
                8: "Excellent",
                9: "Powerful"
            },
            9: {
                1: "Powerful",
                2: "Supportive",
                3: "Friendly",
                4: "Challenging",
                5: "Neutral",
                6: "Supportive",
                7: "Spiritual",
                8: "Material",
                9: "Excellent"
            }
        };


        // Show modal on Begin Test click
        calculateMyNumberBtn.addEventListener('click', () => {
            let bDate = document.getElementById('birthDate').value;
            let fullName = document.getElementById('fullName').value;
            if (bDate && fullName) {
                let nameNum = calculateNameNumber(fullName);
                let birthNum = calculateBirthNumber(bDate);

                let relation = compatibilityMatrix[birthNum][nameNum];

                setCharacterDetails('');
                setCharacterDetails(`
                    Birth Number: ${birthNum}<br>
                    Name Number: ${nameNum}<br>
                    Compatibility: ${relation}<br>
                `);
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

        // Function to calculate Name Number
        function calculateNameNumber(name) {
            name = name.toUpperCase().replace(/[^A-Z]/g, ''); // Remove non-letters
            let sum = 0;
            for (let char of name) {
                if (chaldeanMap[char] !== undefined) {
                    sum += chaldeanMap[char];
                }
            }
            // Reduce to single digit
            while (sum > 9) {
                sum = sum.toString().split('').reduce((acc, digit) => acc + Number(digit), 0);
            }
            return sum;
        }

        // Function to calculate Birth Number
        function calculateBirthNumber(dob) {
            // Expect format YYYY-MM-DD
            let day = new Date(dob).getDate();
            let sum = day;
            while (sum > 9) {
                sum = sum.toString().split('').reduce((acc, digit) => acc + Number(digit), 0);
            }
            return sum;
        }
    </script>
</body>

</html>