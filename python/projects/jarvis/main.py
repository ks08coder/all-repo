import pyttsx3 #pip install pyttsx3
import speech_recognition as sr #pip install speechRecognition
import datetime
import wikipedia 
import webbrowser
import os
import smtplib
import sys
from email.message import EmailMessage
import psutil
import pyautogui
from PIL import Image, ImageGrab # pip install pillow
import time
import PyPDF2


engine = pyttsx3.init('sapi5')
voices = engine.getProperty('voices')
# print(voices[1].id)
engine.setProperty('voice', voices[0].id)


def speak(audio):
    engine.say(audio)
    engine.runAndWait()


def wishMe():
    hour = int(datetime.datetime.now().hour)
    if hour>=0 and hour<12:
        speak("Good Morning!")

    elif hour>=12 and hour<18:
        speak("Good Afternoon!")   

    else:
        speak("Good Evening!")  

    speak("I am your desktop Assistant Sir. My name is Jarvis. Please tell me how may I help you")       

def takeCommand():

    r = sr.Recognizer()
    with sr.Microphone() as source:
        print("Listening...")
        r.pause_threshold = 1
        audio = r.listen(source)                       

    try:
        print("Recognizing...")    
        query = r.recognize_google(audio, language='en-in')
        speak(f"Sir, You said: {query}\n")
        speak("Sir Please wait a minute I am executing cell to do your work ")
        print(f"Sir, You said: {query}\n")

    except Exception as e:
        print(e)  
        speak("I can't recognise that") 
         
        speak("Say that again please...")  
        return "None"
    return query

# def takeCommand():
#     query = input()
#     return query

def send_email(receiver, subject, message):
    server = smtplib.SMTP('smtp.gmail.com', 587)
    server.starttls()
    server.login('jeet.sks2008@gmail.com', 'jeet@2008')
    email = EmailMessage()
    email['From'] = 'jeet.sks2008@gmail.com'
    email['To'] = receiver
    email['Subject'] = subject
    email.set_content(message)
    server.send_message(email)


email_list = {
    'first': 'kshitizcode08@gmail.com',
    'dev': 'deonarayanindia@gmail.com',
    'school': 'kshitizcode08@gmail.com'
}


def get_email_info():
    speak('To Whom you want to send email')
    name = takeCommand()
    receiver = email_list[name]
    print(receiver)
    speak('What is the subject of your email?')
    subject = takeCommand()
    speak('Tell me the text in your email')
    message = takeCommand()
    send_email(receiver, subject, message)
    speak('Hey. Your email is sent')

    server = smtplib.SMTP('smtp.gmail.com', 587)
    server.ehlo()
    server.starttls()
    server.login('jeet.sks2008@gmail.com', 'jeet@2008')
    server.sendmail('jeet.sks2008@gmail.com', to, content)
    server.close()


def cpu():
    cpu = str(psutil.cpu_percent())
    speak(f'{cpu} percent of cpu is left')
    print('Cpu')
    print(cpu)
    battery = psutil.sensors_battery().percent
    print('battery')
    print(battery)
    speak(f'{battery} percent of battery is left')
    


if __name__ == "__main__":
    wishMe()
    while True:
    # if 1:
        query = takeCommand().lower()

        # Logic for executing tasks based on query
        if 'wikipedia' in query:
            speak('Searching Wikipedia...')
            query = query.replace("wikipedia", "")
            results = wikipedia.summary(query, sentences=4)
            speak("According to Wikipedia")
            print(results)
            speak(results)

        elif 'open youtube' in query:
            webbrowser.open("youtube.com")

        elif 'open google' in query:
            webbrowser.open("google.com")

        elif 'open stackoverflow' in query:
            webbrowser.open("stackoverflow.com")   

        elif 'play music' in query:
            music_dir = 'E:\\Songs\\New Songs'   
            songs = os.listdir(music_dir)
            print(songs)    
            os.startfile(os.path.join(music_dir, songs[1]))
        
        elif 'search on chrome' in query:
            speak('What should I search for')
            searchchrome = takeCommand()
            chromepath = 'C://Users//hp//AppData//Local//Google//Chrome//Application//chrome.exe %s'
            webbrowser.get(chromepath).open_new_tab(searchchrome)
        
        elif 'no work' in query:
            sys.exit()

        elif 'take a screenshot' in query:
            time.sleep(2)
            image = ImageGrab.grab().convert('L')  
            data = image.load()
            image.show()

        elif 'tell about cpu and battery' in query:
            cpu()

        elif 'what is the time' in query:
            strTime = datetime.datetime.now().strftime("%H:%M:%S")    
            speak(f"Sir, the time is {strTime}")

        elif 'shut down done' in query:
            try:
                os.system('shutdown /s')
            except Exception as e:
                print(e)

        elif 'restart done' in query:
            try:
                os.system('shutdown /r')
            except Exception as e:
                print(e)

        elif 'logout done' in query:
            try:
                os.system('shutdown -1')
            except:
                takeCommand()

        elif 'read document' in query:
            book = open('C:\\Users\\hp\\Desktop\\Web work\\python\\projects\\pdfreader\\python_tutorial.pdf', 'rb')
            pdfReader = PyPDF2.PdfFileReader(book)
            pages = pdfReader.numPages
            print("python pdf")
            for num in range(19, 20):
                print("reading pdf")
                page = pdfReader.getPage(num)
                text = page.extractText()
                print("extracting pdf text start reading ")
                print(text)
                speak(text)
 
        elif 'open code' in query:
            codePath = "C:\\Users\\hp\\AppData\\Roaming\\Microsoft\\Windows\\Start Menu\\Programs\\Visual Studio Code\\code.exe %s"
            # C:\Users\hp\AppData\Roaming\Microsoft\Windows\Start Menu\Programs\Visual Studio Code
            os.startfile(codePath)

        elif 'send email' in query:
            get_email_info()