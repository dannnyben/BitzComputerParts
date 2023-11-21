/* Creates the CPU Listings Table */
CREATE TABLE CPU_Listings(
    CPU_ID int(10) AUTO_INCREMENT,
    CPU_Name text(30),
    CPU_Cores int(5),
    CPU_Manufacturer text(30),
    CPU_Price double(10),
    Seller_Email varchar(30),
    Seller_Country text(30),
    PRIMARY KEY(CPU_ID)          
);

/* Creates the RAM Listings Table */
CREATE TABLE RAM_Listings(
    RAM_ID int(10) AUTO_INCREMENT,
    RAM_Name text(30),
    RAM_Speed float(6),
    RAM_Type varchar(4),
    RAM_Manufacturer text(30),
    RAM_Price double(10),
    Seller_Email varchar(30),
    Seller_Country text(30),
    PRIMARY KEY(RAM_ID)
);

/* Creates the GPU Listings Table */
CREATE TABLE GPU_Listings(
    GPU_ID int(10) AUTO_INCREMENT,
    GPU_Name text(30),
    GPU_Speed float(6),
    GPU_VRAM int(4),
    GPU_Manufacturer text(30),
    GPU_Price double(10),
    Seller_Email varchar(30),
    Seller_Country text(30),
    PRIMARY KEY(GPU_ID)
);

/* Creates the Monitor Listings Table */
CREATE TABLE Monitor_Listing(
    Monitor_ID int(10) AUTO_INCREMENT,
    Monitor_Name text(30),
    Monitor_HZ float(6),
    RAM_Manufacturer text(30),
    Monitor_Resolution bool(2),
    Monitor_Price double(10),
    Seller_Email varchar(30),
    Seller_Country text(30),
    PRIMARY KEY(Monitor_ID)
);

/* Creates the Android Phone Listings Table */
CREATE TABLE AndroidMobile_Listing(
    Phone_ID int(10) AUTO_INCREMENT,
    Phone_Name text(30),
    Phone_Memory_Size int(10),
    Phone_Manufacturer text(30),
    Phone_Price double(10),
    Seller_Email varchar(30),
    Seller_Country text(30),
    PRIMARY KEY(Phone_ID)
);

/* Creates the IPhone Listings Table */
CREATE TABLE IPhone_Listing(
    IPhone_ID int(10) AUTO_INCREMENT,
    IPhone_Name text(30),
    IPhone_Memory_Size int(10),
    IPhone_Battery_Life varchar(4),
    IPhone_Price double(10),
    Seller_Email varchar(30),
    Seller_Country text(30),
    PRIMARY KEY(IPhone_ID)
);

/* Creates the Mackbook Listings Table */
CREATE TABLE Macbook_Listing(
    Macbook_ID int(10) AUTO_INCREMENT,
    Macbook_Name text(30),
    Macbook_CPU text(30),
    Mackbook_Year int(4),
    Macbook_Price double(10),
    Seller_Email varchar(30),
    Seller_Country text(30),
    PRIMARY KEY(Macbook_ID)
);

/* Creates the PC Listings Table */
CREATE TABLE PC_Listing(
    PC_ID int(10) AUTO_INCREMENT,
    PC_CPU text(30),
    PC_CPU_Cores int(3),
    PC_CPU_Speed int(5),
    PC_RAM_Size int(10),
    PC_RAM_Type varchar(4),
    PC_RAM_Speed varchar(4),
    PC_PSU_Wattage int(4),
    PC_WaterCooled bool(1),
    PC_Storage_Size int(4),
    PC_Torage_Type text(2),
    PC_Number_Of_Fans int(3),
    PC_RGB bool(1),
    PC_GPU_Name text(30),
    PC_GPU_Speed float(6),
    PC_GPU_VRAM int(4),
    RAM_Manufacturer text(30),
    PC_Price double(10),
    Seller_Email varchar(30),
    Seller_Country text(30),
    PRIMARY KEY(PC_ID)
);

/* Creates the Laptop Listings Table */
CREATE TABLE Laptop_Listing(
    Laptop_ID int(10) AUTO_INCREMENT,
    Laptop_Name text(30),
    Laptop_CPU_Name text(30),
    Laptop_CPU_Cores int(5),
    Laptop_CPU_Speed int(5),
    Laptop_GPU_Name text(30),
    Laptop_GPU_VRAM int(3),
    Laptop_GPU_Speed int(4),
    Laptop_RAM_Size int(3),
    Laptop_RAM_Speed int(4),
    Laptop_Type varchar(4),
    Laptop_Price double(10),
    Seller_Email varchar(30),
    Seller_Country text(30),
    PRIMARY KEY(Laptop_ID)
);
