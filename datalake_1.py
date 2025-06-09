import os

# Base directory
base_dir = r"D:\DLH_datalake_1"

# Struktur folder
folder_structure = {
    "data_raw": os.path.join(base_dir, "data_raw"),
    "data_organized_csv": os.path.join(base_dir, "data_organized", "csv"),
    "data_organized_pdf": os.path.join(base_dir, "data_organized", "pdf"),
    "data_organized_txt": os.path.join(base_dir, "data_organized", "txt"),
    "data_staging": os.path.join(base_dir, "data_staging"),
    "data_warehouse": os.path.join(base_dir, "data_warehouse"),
    "log": os.path.join(base_dir, "log")
}

# Buat semua folder
for name, path in folder_structure.items():
    os.makedirs(path, exist_ok=True)
    print(f"✅ Folder '{name}' dibuat di {path}")
