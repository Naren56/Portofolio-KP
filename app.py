import streamlit as st
import pandas as pd
import numpy as np
import matplotlib.pyplot as plt
import seaborn as sns

# Judul utama
st.title("📊 Dashboard Analisis Data Penjualan")

# Sidebar navigasi
st.sidebar.header("Navigasi")
menu = st.sidebar.radio("Pilih Halaman:", ["Beranda", "Upload Data", "Analisis", "Visualisasi"])

# Halaman Beranda
if menu == "Beranda":
    st.markdown("""
    ## Selamat Datang di Aplikasi Analisis Data Penjualan
    Aplikasi ini dibuat sebagai contoh project **Streamlit** untuk latihan deployment.  
    Kamu bisa:
    - 📁 Upload data penjualan (format CSV)
    - 🔍 Lihat statistik deskriptif
    - 📈 Visualisasi data dengan grafik interaktif  
    ---
    """)

# Halaman Upload Data
elif menu == "Upload Data":
    st.subheader("📁 Upload File CSV")
    uploaded_file = st.file_uploader("Pilih file CSV kamu", type=["csv"])
    if uploaded_file is not None:
        df = pd.read_csv(uploaded_file)
        st.session_state['df'] = df
        st.success("File berhasil di-upload!")
        st.write("### Preview Data:")
        st.dataframe(df.head())
    else:
        st.info("Silakan upload file CSV terlebih dahulu.")

# Halaman Analisis
elif menu == "Analisis":
    st.subheader("🔍 Analisis Deskriptif Data")
    if 'df' in st.session_state:
        df = st.session_state['df']
        st.write("### Statistik Deskriptif:")
        st.write(df.describe())
        st.write("### Informasi Kolom:")
        st.write(df.dtypes)
    else:
        st.warning("Upload data terlebih dahulu di menu Upload Data.")

# Halaman Visualisasi
elif menu == "Visualisasi":
    st.subheader("📈 Visualisasi Data Penjualan")
    if 'df' in st.session_state:
        df = st.session_state['df']
        numeric_cols = df.select_dtypes(include=np.number).columns.tolist()

        if len(numeric_cols) >= 2:
            x_axis = st.selectbox("Pilih kolom X", numeric_cols)
            y_axis = st.selectbox("Pilih kolom Y", numeric_cols)

            fig, ax = plt.subplots()
            sns.scatterplot(data=df, x=x_axis, y=y_axis, ax=ax)
            ax.set_title(f"Scatter Plot {x_axis} vs {y_axis}")
            st.pyplot(fig)
        else:
            st.warning("Tidak cukup kolom numerik untuk membuat grafik.")
    else:
        st.warning("Upload data terlebih dahulu di menu Upload Data.")
