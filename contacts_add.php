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
</head>

<body>
    <form action="contacts_save.php" method="POST">
        <table style="justify-content:center">
            <tr>
                <td>First Name : <input type="text" name="fname" /></td>
            </tr>
            <tr>
                <td>Last Name : <input type="text" name="lname" /></td>
            </tr>
            <tr>
                <td>Birth Date : <input type="date" name="dob" /></td>
            </tr>
            <tr>
                <td>Phone no. : <input type="text" name="phone" /></td>
            </tr>
            <tr>
                <td>Email : <input type="email" name="email" /></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Submit</button></td>
                <td><button type="submit" name="view">View Details</button></td>
            </tr>
        </table>
    </form>

    <?php
    // session_start();
    // if (!empty($_SESSION['id']) && !empty($_SESSION['email'])){
    //     // ---------- Insert Data ----------
    //     if (isset($_POST['submit'])) {
    //         $firstName = $_POST['fname'];
    //         $lastName  = $_POST['lname'];
    //         $birthDate = $_POST['dob'];
    //         $phone     = $_POST['phone'];
    //         $email     = $_POST['email'];
    //         $id    = $_POST['id'];

    //         if (!empty($firstName) && !empty($lastName) && !empty($birthDate) && !empty($phone) && !empty($email)) {
    //             // $_SESSION[]
    //             $insertQuery = "INSERT INTO contacts (firstName, lastName, birthDate, phone, email, id) 
    //                             VALUES ('$firstName', '$lastName', '$birthDate', '$phone', '$email', '$id')";
    //             $conn = connectToDB();
    //             $result = mysqli_query($conn, $insertQuery);
    //             closeConnection($conn);

<<<<<<< Updated upstream
    //             echo "Data saved successfully!<br>";
    //         } else {
    //             echo "Please enter all the values.";
    //         }
    //     }
    // }
    ?>
=======
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
                        placeholder="+91 12345 67890"
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
>>>>>>> Stashed changes
</body>

</html>