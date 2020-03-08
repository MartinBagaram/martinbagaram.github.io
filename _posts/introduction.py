import numpy as np
import cv2

# load an image
img = cv2.imread('./data/test.jpg', 0)
# Show the image
cv2.imshow('image', img)
cv2.waitKey(0)
cv2.destroyAllWindows()
