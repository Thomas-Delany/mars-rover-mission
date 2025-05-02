#Mars Rover Mission

Deployed at: https://lightgoldenrodyellow-kingfisher-429222.hostingersite.com/ 

Your Task

You’re part of the team that explores Mars by sending remotely controlled vehicles to the surface
of the planet. Develop a software that translates the commands sent from earth to instructions
that are understood by the rover.

Requirements

You are given the initial starting point (x,y) of a rover and the direction (N,S,E,W)
it is facing.

The rover receives a collection of commands. (E.g.) FFRRFFFRL

The rover can move forward (f).

The rover can move left/right (l,r).

Suppose we are on a really weird planet that is square. 200x200 for example

Implement obstacle detection before each move to a new square. If a given
sequence of commands encounters an obstacle, the rover moves up to the last
possible point, aborts the sequence and reports the obstacle.

Take into account Rovers are expensive, make sure the software works as expected.

---

My interpretation of the rules to the best of my ability using logic:

0(x,y) = 1 if square is obstacle
0(x,y) = 0 if square is NOT obstacle

Rover need to execute a sequence of commands FFRRFFFRL (f = forward, r = right, l = left), for example, starting from (x,y), follow command [F, R, L], for example, moving to square (a, b) as long as:

0 is less than a and 0 less than 200 (this is the y axis)

AND

0 is less than b and 0 less than 200 (this is the x axis)

AND

0(a, b) = 0 (so, as stated, 0 = NOT obstacle)

Let's call the above logic "RoverSequence".

If this is true for (a,b), we can execute the command and move the rover to point (a, b). If this is NOT true (either of the operands are not true), the rover aborts the sequence and reports the obstacle (this could be a button on the homepage, for example, that turns red).

So, execute one step (one square) means: move to point (a, b) if and only if "RoverSequence" (the above logic) is true, then, execute the next step: move to point (a, b) (this can be controlled by a user on the homepage) if and only if "RoverSequence" is true. Repeat for every step until the sequence ends or until you encounter an obstacle, i.e., "RoverSequence" is false. If "RoverSequence"(a,b) is false, then abort the sequence and report the obstacle.

__________

## 🚀 Project Overview

This project was built using **PHP**, **Laravel**, **JavaScript**, and **Bootstrap**.

### 🧠 1. Planning and Logic

The first step involved logically mapping out the problem using a grid, X/Y axes, and logical operators. This initial logic also served as **pseudocode**, allowing me to establish a clear structure and protocol before converting it into software.

### 🎨 2. Frontend First Approach

As with most of my projects, I began by building the **frontend**. I prefer this approach as it helps me visualize the user interface early on. Often, new ideas arise during this stage. In this case, the addition of a **"Reset"** button and separate divs for **North**, **South**, **East**, and **West** controls were decisions made during UI development.

### 🧩 3. Bootstrap Integration

Due to the project timeline, I opted for **Bootstrap via CDN**, linked directly in the `index.blade.php` file. Since this is a **Single Page Application**, Bootstrap was sufficient to ensure a clean, responsive layout.

### 🧰 4. Backend Setup

I used Laravel’s `RoverController.php` to handle backend logic and `web.php` for routing. These files handle the server-side requests and responses efficiently.

### 📄 5. Blade Template Structure

Since the site is a single page, I used just one Blade template: `index.blade.php`. Thanks to Blade directives, the logic in this file is minimal. The layout consists of a **row with two columns**—one for the **grid** and another for the **user controls**. Bootstrap classes are used throughout for styling.

### 💻 6. JavaScript Functionality

The JavaScript file `rover.js` manages **event listeners** and **click interactions** for controlling the rover.

### 🔧 7. Future Improvements

If time allowed, here are a few enhancements I would make:
- Implement **directional orientation**, so the rover turns on "L" or "R" commands.
- Highlight **N, S, E, W** controls dynamically based on the rover's facing direction.
- Replace the current popup for obstacle detection with a **vibration effect** or animated alert within the grid.

### 🌐 8. Deployment

The project is deployed live at:  
🔗 https://lightgoldenrodyellow-kingfisher-429222.hostingersite.com/ 

For local development, I used **Vite** and Laravel’s **Artisan** server.

