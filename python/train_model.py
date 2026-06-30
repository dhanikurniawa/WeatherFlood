import pandas as pd
from sklearn.tree import DecisionTreeClassifier
import joblib

# Membaca dataset
df = pd.read_csv("weather_data.csv")

# Fitur
df["hujan"] = df["hujan"].map({
    "Tidak": 0,
    "Ya": 1
})

X = df[[
    "suhu",
    "kelembaban",
    "tekanan_udara",
    "kecepatan_angin",
    "curah_hujan",
    "hujan"
]]

# Target
y = df["potensi_banjir"]

# Membuat model
model = DecisionTreeClassifier(random_state=42)

# Training
model.fit(X, y)

# Simpan model
joblib.dump(model, "model.pkl")

print("Model berhasil dibuat!")