<?php
echo "Meal Menu:\n";
echo "1. Breakfast\n";
echo "2. Lunch\n";
echo "3. Snacks\n";
echo "4. Dinner\n";

$mealChoice = intval(readline("Enter your choice (1-4): "));

switch ($mealChoice) {
    case 1:
        echo "Breakfast Options:\n";
        echo "1. Pancakes\n";
        echo "2. Omelette\n";
        echo "3. Cereal\n";
        echo "4. Juices and Smoothies\n";
        
        // Take user input for the breakfast item choice
        $breakfastChoice = intval(readline("Enter your choice (1-4): "));
        
        switch ($breakfastChoice) {
            case 1:
                echo "You selected Pancakes.\n";
                break;
            case 2:
                echo "You selected Omelette.\n";
                break;
            case 3:
                echo "You selected Cereal.\n";
                break;
            case 4:
                echo "You selected Smoothie.\n";
                break;
            default:
                echo "Invalid choice in Breakfast menu.\n";
        }
        break;
    
    case 2:
        echo "Lunch Options:\n";
        echo "1. Grilled Chicken\n";
        echo "2. Caesar Salad\n";
        echo "3. Burger\n";
        echo "4. Pasta\n";
        
        $lunchChoice = intval(readline("Enter your choice (1-4): "));
        
        switch ($lunchChoice) {
            case 1:
                echo "You selected Grilled Chicken.\n";
                break;
            case 2:
                echo "You selected Caesar Salad.\n";
                break;
            case 3:
                echo "You selected Burger.\n";
                break;
            case 4:
                echo "You selected Pasta.\n";
                break;
            default:
                echo "Invalid choice in Lunch menu.\n";
        }
        break;
    
    case 3: // Snacks
        echo "Snacks Options:\n";
        echo "1. French Fries\n";
        echo "2. Nachos\n";
        echo "3. Fruit Salad\n";
        echo "4. Sandwich\n";
        
        // Take user input for the snacks item choice
        $snacksChoice = intval(readline("Enter your choice (1-4): "));
        
        switch ($snacksChoice) {
            case 1:
                echo "You selected French Fries.\n";
                break;
            case 2:
                echo "You selected Nachos.\n";
                break;
            case 3:
                echo "You selected Fruit Salad.\n";
                break;
            case 4:
                echo "You selected Sandwich.\n";
                break;
            default:
                echo "Invalid choice in Snacks menu.\n";
        }
        break;
    
    case 4: // Dinner
        echo "Dinner Options:\n";
        echo "1. Steak\n";
        echo "2. Grilled Salmon\n";
        echo "3. Stir Fry Vegetables\n";
        echo "4. Pizza\n";
        
        // Take user input for the dinner item choice
        $dinnerChoice = intval(readline("Enter your choice (1-4): "));
        
        switch ($dinnerChoice) {
            case 1:
                echo "You selected Steak.\n";
                break;
            case 2:
                echo "You selected Grilled Salmon.\n";
                break;
            case 3:
                echo "You selected Stir Fry Vegetables.\n";
                break;
            case 4:
                echo "You selected Pizza.\n";
                break;
            default:
                echo "Invalid choice in Dinner menu.\n";
        }
        break;
    
    default:
        echo "Invalid choice in Meal Menu.\n";
}
?>
