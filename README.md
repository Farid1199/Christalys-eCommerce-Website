![chrystalis; logo](https://github.com/Farid1199/Christalys-eCommerce-Website/blob/main/ChrystalisWebsiteProject/public/Images/CatalogueImg/logo.png?raw=true)
![chrystalis; img](https://github.com/Farid1199/Christalys-eCommerce-Website/blob/main/ChrystalisWebsiteProject/public/Images/HomePage/Hero2.png?raw=true)

# Chrystalis eCommerce Website
Welcome to the Christalis-eCommerce-Website repository. It contains the year-long team project for the CS2TP module at Aston University. The following guide will cover general information about the projects, a user guide and instruction manual, project deployment and local run, and further information about the project. 

## Project Information 
Chrystalis is an eCommerce website that caters to a diverse audience, including bridal shoppers, gift seekers, and ethical consumers. The main objective of the project is to provide and sell jewellery, where users can explore rings, necklaces, bracelets, and earrings, adding favourites to their cart or wish list. The user-centric design of Chrystalis ensures easy navigation and accessible UI, and it meets the needs of different users with functionalities including search and filtering, user dashboard, product reviews, accessibility and account settings, and so on. The site also offers straightforward checkout, order tracking with receipt, and a wish list feature for saving products for later consideration. Customer support is accessible via business contact details and query form on the "Contact Us" page, whereas on the "About Us" page, customers can learn our story and objective, along with providing an overall review of the website via a query form, aimed at improving the website and meeting further requirements in the future. 

In addition, the website administrators can track user activity, inventory levels, and order statuses in real-time, by sending notifications and user logs to the admin panel. To further improve user engagement, the platform offers real-time alerts for the user, product and order process notifications using flash messages. Users can also add, update, and delete their accounts, whereas the admin can process users, products, and user orders in the same manner. All these features are achieved by using a clean interface and responsive design for access across devices.  

Our tech stack includes HTML5, CSS, JavaScript, Tailwind CSS, Blade and Bootstrap for frontend development, whereas PHP in Laravel framework manages backend tasks, ensuring scalability. Additionally, we integrated Stripe for secure and efficient transaction processing, and Laravel Breeze for secure user registration, login and forgot password features. For the admin panel, the OpenAdmin framework has been utilised to organise our database functionalities and ensure seamless user, inventory and order management. 

## Website Deployment + Trello board 
The website has been deployed on Aston University’s domain, whereas we successfully utilised Trello to allocate and manage tasks and roles. 

* Website URL: https://220090483.cs2410-web01pvm.aston.ac.uk/ 
* Trello Board: https://trello.com/b/D1muYjNN/team-project-group-8/ 

## Run locally (Windows) 
The following section contains a website installation manual on how to deploy and locally run our website

Before running the website, you need to install the following clients and libraries: 
* XAMPP - https://www.apachefriends.org
* NodeJs - https://nodejs.org/en
* Composer - https://getcomposer.org
* Git - https://git-scm.com/

### Website installation and deployment

1. Install XAMPP, and Node.js for npm
    ```powershell
    winget install ApacheFriends.Xampp.8.2
    ```
    ```powershell
    winget install OpenJS.NodeJS
    ```
    
2. Navigate to the Xampp folder in your local disc (C:\xampp\htdocs) open terminal (cmd) and enter
   ```powershell
   git clone https://github.com/Farid1199/Christalys-eCommerce-Website.git
   ```

4. Change the directory to the root of the repository
    ```powershell
    cd .\Christalys-eCommerce-Website\
    ```

5. Lastly, in the directory install composer and run it using the following commands: 
    ```powershell
    composer install 
    ```
    ```powershell
    composer update
    ```
    
### XAMPP local run
1. Open the XAMPP Control Panel and start Apache and MySQL (first 2 modules)

2. Open the following links in your browser:
    - http://localhost
    - http://localhost/phpmyadmin
      
3. Navigate to C:\xampp\htdocs\Christalys-eCommerce-Website\ChrystalisWebsiteProject in your local disc

Enter the following command to create the database: 

    php artisan migrate


The site **requires** some products to be present in the database to function correctly.
Enter the following command to populate the database with the necessary data for the website to function properly:

    php artisan db:seed

4. Refresh [phpmyadmin](http://localhost/phpmyadmin) in your browser 
    
### Website local run

Navigate to C:\xampp\htdocs\Christalys-eCommerce-Website\ChrystalisWebsiteProject and open 2 terminal tabs:

In the first terminal, enter 

    npm run dev

In the second terminal, enter


    php artisan serve


In the second terminal, after you are provided with the following link 


    http://127.0.0.1:8000

Press **CTRL + Click** on the link to run the website on your web browser. 
To stop the server, press **CTRL+C** in the terminal. 


## Credits 
- [220090483 - Mikidam Farid](https://github.com/Farid1199) - Project Manager | Backend Lead | Full Stack Developer
- [220212269 - Joshi Dhruv](https://github.com/03DhruvJoshi) - Assistant Manager | Frontend Lead | Full Stack Developer
- [220164337 - Matharu Amar](https://github.com/A1Matharu) - Documentation | Database | Frontend Developer
- [220018166 - Majewski Lukasz](https://github.com/Lukasz-Majewski1) - Documentation | Database
- [210130999 - Moghees Abdul](https://github.com/Abdul-moghees) - Documentation | Frontend Developer
- [220218593 - Mohan Rahul](https://github.com/rahulmzz) - Documentation | Frontend Developer 
- [220401955 - Mohamed Chiya](https://github.com/arslxxn) - Documentation | Backend Developer

