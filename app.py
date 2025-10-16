import streamlit as st
import pandas as pd
import numpy as np
import matplotlib.pyplot as plt

# Judul aplikasi
st.title("📊 Portofolio Analisis Data")

# Sidebar
st.sidebar.header("Navigasi")
menu = st.sidebar.selectbox("Pilih menu:", ["Beranda", "Upload Data", "Visualisasi"])

# Halaman Beranda
if menu == "Beranda":
    st.write("Selamat datang di Aplikasi Portofolio Streamlit!")
    st.write("Gunakan menu di sebelah kiri untuk menjelajahi fitur aplikasi ini.")

# Halaman Visualisasi
elif menu == "Visualisasi":
    st.write("Contoh visualisasi data")
    data = np.random.randn(100)
    fig, ax = plt.subplots()
    ax.hist(data, bins=20)
    st.pyplot(fig)
