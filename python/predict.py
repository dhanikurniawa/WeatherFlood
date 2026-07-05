import os
import joblib
import sys

BASE_DIR = os.path.dirname(os.path.abspath(__file__))

model = joblib.load(os.path.join(BASE_DIR, "model.pkl"))

suhu = float(sys.argv[1])
kelembaban = float(sys.argv[2])
tekanan = float(sys.argv[3])
angin = float(sys.argv[4])
curah = float(sys.argv[5])

hujan = 1 if sys.argv[6] == "Ya" else 0

hasil = model.predict([
    [suhu, kelembaban, tekanan, angin, curah, hujan]
])

print(hasil[0])