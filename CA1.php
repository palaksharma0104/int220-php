
<?php

// Associative array to store flight details
$flights = [
    "FL456" => [
        "destination" => "London",
        "seatsAvailable" => 9,
        "reservations" => []
    ],
    "FL457" => [
        "destination" => "Netherlands",
        "seatsAvailable" => 6,
        "reservations" => []
    ],
    "FL458" => [
        "destination" => "India", 
        "seatsAvailable" => 3,
        "reservations" => []
    ],
    "FL459" => [
        "destination" => "Japan", 
        "seatsAvailable" => 3,
        "reservations" => []
    ],
    "FL460" => [
        "destination" => "USA", 
        "seatsAvailable" => 11,
        "reservations" => []
    ],
];

// Function to add a new flight
function addFlight(&$flights) {
    $flightNumber = readline("Enter flight number: ");
    $destination = readline("Enter destination: ");
    $seatsAvailable = readline("Enter number of seats available: ");

    $flights[$flightNumber] = [
        "destination" => $destination,
        "seatsAvailable" => $seatsAvailable,
        "reservations" => []
    ];
}


// Function to book a flight
function bookFlight(&$flights) {
    $flightNumber = readline("Enter flight number: ");

    if (!isset($flights[$flightNumber])) {
        echo "Flight not found.\n";
        return;
    }

    if ($flights[$flightNumber]["seatsAvailable"] <= 0) {
        echo "No seats available for this flight.\n";
        return;
    }

    $passengerName = readline("Enter passenger name: ");
    $reservationId = uniqid(); // Generate a unique reservation ID

    $flights[$flightNumber]["reservations"][$reservationId] = $passengerName;
    $flights[$flightNumber]["seatsAvailable"]--;

    echo "Flight booked successfully. Reservation ID: " . $reservationId . "\n";
}

// Function to cancel a booking
function cancelBooking(&$flights) {
    $reservationId = readline("Enter reservation ID: ");

    foreach ($flights as &$flight) {
        if (isset($flight["reservations"][$reservationId])) {
            unset($flight["reservations"][$reservationId]);
            $flight["seatsAvailable"]++;
            echo "Booking canceled successfully.\n";
            return;
        }
    }

    echo "Reservation not found.\n";
}

// Function to check seat availability
function checkSeatAvailability(&$flights) {
    $flightNumber = readline("Enter flight number: ");

    if (!isset($flights[$flightNumber])) {
        echo "Flight not found.\n";
        return;
    }

    echo "Seats available for " . $flightNumber . ": " . $flights[$flightNumber]["seatsAvailable"] . "\n";
}

// Function to generate a reservation report
function generateReport(&$flights) {
    echo "Reservation Report:\n";
    foreach ($flights as $flightNumber => $flight) {
        echo "Flight: " . $flightNumber . " - Destination: " . $flight["destination"] . "\n";
        echo "Reservations:\n";
        foreach ($flight["reservations"] as $reservationId => $passengerName) {
            echo "  Reservation ID: " . $reservationId . " - Passenger: " . $passengerName . "\n";
        }
        echo "\n";
    }
}

while (true) {
    echo "1. Add Flight\n";
    echo "2. Book Flight\n";
    echo "3. Cancel Booking\n";
    echo "4. Check Seat Availability\n";
    echo "5. Generate Report\n";
    echo "6. Exit\n";

    $choice = readline("Enter your choice: ");

    switch ($choice) {
        case 1:
            addFlight($flights);
            break;
        case 2:
            bookFlight($flights);
            break;
        case 3:
            cancelBooking($flights);
            break;
        case 4:
            checkSeatAvailability($flights);
            break;
        case 5:
            generateReport($flights);
            break;
        case 6:
            exit();
        default:
            echo "Invalid choice.\n";
    }
}
?>
