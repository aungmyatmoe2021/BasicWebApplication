Project : Rock Paper Scissors
This repository contains my progress and projects while completing the HTML Foundations module of The Odin Project. The goal of this journey is to master the building blocks of the web and establish a solid foundation in web development.

🚀 Skills Acquired
During this module, I have learned and practiced the following:
    1. HTML Document Structure
    2. Basic Javascript

Git & GitHub Workflow: Initializing repositories, staging changes, committing with meaningful messages, and pushing to remote servers.

📂 Projects Included
    Rock Paper Scissors Project 



*** Project Instruction ***

    Step 1: Setup the project structure
        1. Create a new Git repository for your project.
        2. Create a blank HTML document with a script tag.
        3. Check if JavaScript is linked correctly:
            - Write console.log("Hello World") in JavaScript.
            - Check if “Hello World” is logged in the browser console once you open your webpage.

        It’s best practice to link to an external JavaScript file inside this script tag. Using an external JavaScript file keeps your HTML file clean and organized.

        You don’t have to write additional code in the HTML file. This game is played entirely via the console.

    Step 2: Write the logic to get the computer choice
        Your game will be played against the computer. You will write a function that randomly returns “rock”, “paper” or “scissors”.

        1. Create a new function named getComputerChoice.
        2. Write the code so that getComputerChoice will randomly return one of the following string values: “rock”, “paper” or “scissors”.
            - Hint: The Math.random method returns a random number that’s greater than or equal to 0 and less than 1. Think about how you can use this to conditionally return one of the multiple choices.
            - Note: Some learners might think that arrays are necessary for this problem, but they aren’t. If you’re unfamiliar with arrays, don’t worry - they’ll be covered later in the curriculum.
        3. Test that your function returns what you expect using console.log or the browser developer tools before advancing to the next step.

    Step 3: Write the logic to get the human choice
        Your game will be played by a human player. You will write a function that takes the user choice and returns it.

        1. Create a new function named getHumanChoice.
        2. Write the code so that getHumanChoice will return one of the valid choices depending on what the user inputs.
            - Hint: Use the prompt method to get the user’s input.
            - You do not need to handle reprompting if the user enters an invalid input, as that would require things we will teach later. For now, just assume the user will always enter a valid choice.
        3. Test what your function returns by using console.log.

    Step 4: Declare the players score variables
        Your game will keep track of the players score. You will write variables to keep track of the players score.

        1. Create two new variables named humanScore and computerScore in the global scope.
        2. Initialize those variables with the value of 0.

    Step 5: Write the logic to play a single round
        Your game will be played round by round. You will write a function that takes the human and computer player choices as arguments, plays a single round, increments the round winner’s score and logs a winner announcement.

        1. Create a new function named playRound.
        2. Define two parameters for playRound: humanChoice and computerChoice. Use these two parameters to take the human and computer choices as arguments.
        3. Make your function’s humanChoice parameter case-insensitive so that players can input “rock”, “ROCK”, “RocK”, or other variations.
        4. Write the code for your playRound function to console.log a string value representing the round winner, such as: “You lose! Paper beats Rock”.
        5. Increment the humanScore or computerScore variable based on the round winner.

🛠️ Technologies Used
HTML5 (Semantics and Structure), Javascript

VS Code (Text Editor)

Git & GitHub (Version Control)
