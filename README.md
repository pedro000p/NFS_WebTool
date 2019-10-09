# NFS_WebTool

### Version history

#### 1.1.2
- Changed the disposition of layout on the top nav, colors and added go to Bottom of page, on the file *navs_upper.php*.
- Added log box to all the pages of NFS_WebTool with collapse option which is by default open. Added button to go to the Top of page. Created on a new file *navs_upper2.php*.  

-------------------

#### 1.1.1
- Added navbar
    - with buttons to access to the other tables of Isilon DB
    - with button to reload table
- Each DB table has its page with its name and datatables other than the access table that represents the default page, index.php
- Removed title and table headers from exported data files in: copy, csv, excel
- Added save state to search bar
- Allow the search for unique strings with spaces before/after
- Added some brief description to some elementary components

-------------------

### Instalation:

To install the dependencies its necessary to install **nodejs** that have **npm (node package manager)**.
If necessary, the steps are the following:  
  
#### Install Nodejs / NPM  

##### Debian families:

-------------------
  
1. Update

    ```bash
    $ sudo apt update
    ```  
2. Install nodejs  
    ```bash
    $ sudo apt install nodejs
    ```  
3. This will allow you to install the dependencies to use    
    ```bash
    $ sudo apt install npm
    ```  
4. To check which version of Node.js you have installed after these initial steps, check:  
    ```bash
    $ nodejs -v
    ```  
5. Check NPM version  
    ```bash
    $ npm -v
    ```  

##### RedHat families:

-------------------
  
1. Add Node.js Yum Repository  
    * For Stable Release:-  
    ```bash
    $ sudo yum install -y gcc-c++ make
    $ sudo curl -sL https://rpm.nodesource.com/setup_10.x | sudo -E bash -
    ```  
2. If proxy:  

    ```bash
    $ sudo curl -x http://user:password@proxy:port -sL https://rpm.nodesource.com/setup_10.x | sudo -E bash -
    ```  
3. Install Node.js  
    ```bash
    $ sudo yum install nodejs
    ```  
4. Check Node.js and NPM Version  
    ```bash
    $ node -v 
    ```  
5. Also, check the version of npm.  
    ```bash
    $ npm -v 
    ```
    
-------------------

#### Download NFS_WebTool with *git* or by direct download. 

-------------------

#### Install Dependencies  

-------------------

1. If npm behind proxy set with username:
    ```bash
    npm config set proxy http://user:password@proxy:port
    npm config set https-proxy http://user:password@proxy:port
    ```  
2. Go to the NFS_WebTool folder:  
    ```bash
    cd isilon_frontend
    ```  
3. Inside the folder type:  
    ```bash
    npm install 
    ```  
    
    It will grab the `package.json` file and install all the dependencies referred
    
[See more of NPM CLI documentation here](https://docs.npmjs.com/cli-documentation/)
    
-------------------

##### Folder Structure

-------------------

The folder structure, inside the Master *NFS_WebTool*, to work properly should stay like the following after the installed dependencies:  

    .
    ├── clients.php
    ├── css
    ├── db_files
    ├── exports.php
    ├── img
    ├── index.php
    ├── js
    ├── LICENSE
    ├── navs_upper2.php
    ├── navs_upper.php
    ├── node_modules
    ├── package.json
    ├── package-lock.json
    └── README.md

    5 directories, 9 files

-------------------

##### Connect to DB  

-------------------

1. Change line 4 of file `NFS_WebTool/db_files/DB_conn.php` with the right data `<USER> <PASSWORD> <DB>`

-------------------
