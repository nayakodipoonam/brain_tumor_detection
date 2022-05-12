import cv2
from keras.models import load_model
from PIL import Image
import numpy as np
from keras.models import Sequential


model=load_model('BrainTumor10Epochs.h5')

image=cv2.imread('E:/sdp_sem4_/addable/pred/pred5.jpg')

img=Image.fromarray(image)

img=img.resize((64,64))

img=np.array(img)

input_img=np.expand_dims(img, axis=0)

# print(img)

result=model.predict(input_img)
print(result)