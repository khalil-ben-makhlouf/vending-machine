Smart Vending Machine System
Overview

This project involves the design and implementation of a smart vending machine system that leverages modern technology to enhance user experience, operational efficiency, and overall functionality. The system includes a user-friendly touchscreen interface, efficient inventory management, and real-time monitoring capabilities.
Features :

    User Interface: Modern touchscreen display for easy product selection.
    Payment Methods: Supports multiple coin denominations with accurate change dispensing.
    Inventory Management: Real-time tracking and proactive restocking.
    Customization and Adaptability: Configurable for various product types and environments.
    Remote Monitoring: Web application for monitoring and managing vending machine operations.

Technologies Used:

    Hardware: Raspberry Pi
    Backend: PHP, Laravel
    Frontend: HTML, CSS, JavaScript
    APIs: RESTful APIs for communication between the web application and the vending machine

System Architecture:

    The system architecture includes the following components:
    Vending Machine: Equipped with a touchscreen interface and coin payment system.
    Raspberry Pi: Manages the vending machine's operations and communicates with the server.
    Web Application: Allows operators to monitor sales, manage inventory, and generate reports.
    Server: Handles HTTP requests and responses between the web application and the vending machine.


![communication system](https://github.com/user-attachments/assets/749413b4-2af4-4276-bc60-254de330abcf)


Wiring Diagram

In this section, the electrical connections for the vending machine are detailed. The following figure illustrates the connection between the components.
Power Distribution

    12V Output: Supplies power to the TB6600 drivers through their VCC pins and connects to a dedicated positive rail for the coin selector.
    5V Output: Powers the Raspberry Pi through its power input.

Stepper Motor Control

    Motor Connections: Each Nema 23 stepper motor connects to a dedicated TB6600 driver via its four wires.
        Motor's four wires connect to the corresponding MA+, MA-, MB+, and MB- pins on the TB6600 driver.
    Driver Control to Raspberry Pi (RPi):
        Enable Control (ENA+): The ENABLE+ pin on each driver enables or disables the driver, effectively controlling power to the connected motor.
        Step Pulse Generation (PUL+): The PULSE+ pin connects to a dedicated RPi GPIO pin to transmit step pulses, causing the motor to rotate in increments.
        Directional Control (DIR+): The two motors dispensing coins use separate control for step pulses (PUL+) and direction (DIR+). The PUL+ pin connects to an RPi GPIO for step control, while the DIR+ pin connects to another GPIO for controlling motor direction (clockwise or counter-clockwise).

Coin Selector Integration

The multi-coin selector, with its three pins—12V, GND, and a signal pin—interfaces directly with the Raspberry Pi. The signal pin outputs pulses that convey information about the coins detected, enabling the Raspberry Pi to distinguish between different denominations.
Touch Screen Display

The 7-inch touch screen utilizes an HDMI cable for video transmission and a USB cable for touch functionality. These connect to the corresponding ports on the Raspberry Pi.
Grounding

All components in the system share a common ground connection. This ensures a stable reference point for all electrical circuits.
