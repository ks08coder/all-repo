import time
from PIL import Image, ImageGrab # pip install pillow

if __name__ == "__main__":
    time.sleep(2)
    image = ImageGrab.grab().convert('L')  
    data = image.load()
    # Draw the rectangle for Playground
    for i in range(325, 380):
        for j in range(120, 150):
            data[i, j] = 0

    # Draw the rectangle for cactus
    for i in range(325, 380):
        for j in range(550, 640):
            data[i, j] = 0
    # Draw the rectangle for birds
    for i in range(325, 380):
        for j in range(400, 500):
            data[i, j] = 171
            

    image.show()
    time.sleep(0)