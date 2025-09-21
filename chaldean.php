<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaldean Numerology Calculator</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="min-h-screen flex items-center justify-center p-4">
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
    <div id="default-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg max-w-lg w-full">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Chaldean Trait</h3>
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
                <button id="acceptBtn" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Okay
                </button>
                <button id="declineBtn" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Close
                </button>
            </div>
        </div>
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