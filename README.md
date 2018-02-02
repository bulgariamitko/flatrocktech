# The task
General info: In the famous quote quiz game system will ask questions and user should try to pick a correct answer. Depending on selected mode user will have to choose correct answer from a list of answers, or simply to answer with Yes/No to the question.
Please create a tabbed application as per the provided wireframes:
1) Main page - shows a famous quote quiz
2) Settings page – allows switching between modes.
a) Binary (Yes/No) – this is the default mode
b) Multiple choice questions – showing three possible answers, one of which must be the right one.
By default, a single session consist of 10 quotes. Changing the mode results in a session restart.
Regardless of the currently selected mode, if the user clicks on the right answer a modal box with a message is displayed “Correct! The right answer is: ...”. If the user clicks on the wrong answer a message is displayed “Sorry, you are wrong! The right answer is: ...”. Once OK button is clicked, the next question is shown. After session completion, a statistics screen with the results should be shown with a Start again button (no wireframe provided).

## Technologies that have been used
- PHP v7.1.11
- Symfony v3.2.1
- jquery v2.2.4
- bootstrap v4
- font-awesome v5.0.6
- MySQL v5.0.12
- Server v5.7.21-0ubuntu0.17.10.1
- nginx v1.12.1
- phpmyadmin v4.6.6deb5

## Installation
1. Clone the project from github
2. Import sql dump file located in /demo_application/db_structure
3. Go into /demo_application folder and run the server using: `php bin/console server:run`
4. Use the app :)
  
## More info about the code
I had 3 days to complete this project. I tried to write the code as simple as possible and using the DRY method of writing code. I think there is no repeating code which is important for me. Everything that have been mentioned in the task note have been completed an all the functionality have to be working as the task section description. The code is tested.

## More work should be done
- Regarding the overall look of the pages. There should be more work there so the page looks more than the provided wireframes, but regarding that this is just a demo project and that from the company told me that it should not be 100% accurate regarding the design I can say and because of the short time i have decided to build a solid backed and not focus on the front-end that much.
- Regarding the dynamic of the website I can also say the above things for this point as well, but I should add that consider the fact that I am using bootstrap v4 it should be relatively easy to fix any bugs regarding the responsive pages.
- The views are in two different sections in the project. This is because the home views have been created during the installation of the project and the settings views have been created using the terminal when was created the controller using this command `php bin/console generate:controller` with it i have created the controller, the methods and the views.

## Wireframes
<img src='https://image.ibb.co/gW0xG6/document.png'>
