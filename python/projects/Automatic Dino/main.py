import pyautogui # pip install pyautogui
from PIL import Image, ImageGrab # pip install pillow
# from numpy import asarray
import time
import pyttsx3

speaker = pyttsx3.init()
def Speaka(text):
    speaker.say(text)
    speaker.runAndWait()
def hit(key):
    pyautogui.keyDown(key)
    return

def isCollide(data):
    for i in range(325, 380):
        for j in range(120, 150):
            if data[i, j] == 255:
                Speaka("Playground is White")
                for i in range(325, 380):
                    for j in range(550, 640):
                        data[i, j]= 0
                        if data[i, j] == 0:
                            Speaka("there is cactus")
                            pyautogui.keyDown(space)
                for i in range(325, 380):
                    for j in range(400, 500):
                        if data[i, j] == 0:
                            hit(down)
    for i in range(325, 380):
        for j in range(120, 150):
            if data[i, j] == 0:
                for i in range(325, 380):
                    for j in range(550, 640):
                        if data[i, j] == 255:
                            hit(up)
                for i in range(325, 380):
                    for j in range(400, 500):
                        if data[i, j] == 255:
                            hit(down)

if __name__ == "__main__":
    print("Hey.. Dino game about to start in 3 seconds")
    time.sleep(2)
    hit('up') 
    
    while True:
        image = ImageGrab.grab().convert('L')  
        data = image.load()
        isCollide(data)
            
        # print(asarray(image))
        '''
        # Draw the rectangle for cactus
        for i in range(275, 325):
            for j in range(563, 650):
                data[i, j] = 0
        
        # Draw the rectangle for birds
        for i in range(250, 300):
            for j in range(410, 563):
                data[i, j] = 171

        image.show()
        break
      '''

