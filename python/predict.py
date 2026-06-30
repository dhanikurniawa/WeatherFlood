import joblib
import sys

# Load model
model = joblib.load("model.pkl")

# Ambil input dari PHP
suhu = float(sys.argv[1])
kelembaban = float(sys.argv[2])
tekanan = float(sys.argv[3])
angin = float(sys.argv[4])
curah = float(sys.argv[5])

hujan = 1 if sys.argv[6] == "Ya" else 0

# Prediksi
hasil = model.predict([
    [suhu, kelembaban, tekanan, angin, curah, hujan]
])

print(hasil[0])