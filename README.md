## Geotastic-hack

##### A simple little script/tool to help you obtain pinpoint accuracy in the free online game Geotastic.
<br />

## Installation:
```
git clone https://github.com/Ttonho/Geotastic-hack

```
<br />

## Ussage Steps:

##### Opening the project and executing
1. type: git clone https://github.com/Ttonho/Geotastic-hack
2. Install vscode on https://code.visualstudio.com/download 
3. open vscode
4. Type: Crtl + O to open a file and search for geotastic.php in the folder you have downloaded
5. with the file open you will see on line 6 (CURLOPT_URL => 'LINK HERE'. Replace the Link Here with the link that I will teach you to get it now

##### How to get the link 

1. Go to the website https://geotastic.de/home and make a free account.

2. Make a local game or go online, it doesn't matter.

3. You will need to open your browsers dev tools console. `Ctrl + SHIFT + i` (Or what ever your buttons combination is for the browser you are using).
It should look something like this. (Firefox)
![foto1](https://user-images.githubusercontent.com/58658417/178397556-b567662c-96c9-474b-b4d8-45ec7d2df760.png)

4. Once here you will need to click on the "Network" tab and filter for "JS"
![foto2](https://user-images.githubusercontent.com/58658417/178399311-c36475c8-60a8-4662-9b81-f392a4f3a401.png)


5. Then all you will need to do now is start up a match. If nothing shows up or you don't know what to click on. Close the dev console and repeat steps 3 & 4. Then  click the "Return to start" button in the window/game. After that you should get a result.
![foto3](https://user-images.githubusercontent.com/58658417/178399610-cb7f004c-3209-4e18-ba7f-c2ce4dceff89.jpg)

6. You will then need to right click that url highlighted in purple. Hover over "Copy" then click on "Copy url".

7. download php if you haven't downloaded it before

8. Open vscode and install the code runner extension
![runner](https://user-images.githubusercontent.com/58658417/178400267-560e5e26-5b80-4df7-8d02-e9873fa1c87d.png)

9. Open the file in vscode called geotastic.php that you downloaded with git clone https://github.com/Ttonho/Geotastic-hack his name is geotastic.php
![Screenshot_2022-07-12_00-14-05](https://user-images.githubusercontent.com/58658417/178400837-68134962-925a-427c-9be9-a7b92d74abb9.png)

10. 
replace the 'LINK HERE' with the link copied in step 7 and then press crtl + alt + N. In output will come two numbers one is the latitude the other the longitude, copy both and put in google or google maps
![foto8](https://user-images.githubusercontent.com/58658417/178401273-de140f76-6d95-474a-b915-e636f30dc706.png)

![foto9](https://user-images.githubusercontent.com/58658417/178401280-9f501b80-063b-43b0-8ea4-687494a26000.png)

![foto10](https://user-images.githubusercontent.com/58658417/178401409-1d7ebf2f-4962-4224-bb11-1172f86e7da9.png)

