#!/bin/bash

API_KEY="NASTCO_LOOKER_2026_SECURE"
BASE_URL="http://localhost:10040/wp-json/nastco/v1"
HEADERS="-H x-nastco-key:${API_KEY}"

echo "[*] Initiating NASTCO telemetry extraction..."

# Function to fetch and convert to CSV
extract_to_csv() {
    local endpoint=$1
    local filename=$2
    
    echo " -> Downloading ${endpoint}..."
    curl -s -X GET "${BASE_URL}/${endpoint}" -H "x-nastco-key: ${API_KEY}" | \
    jq -r '
        if length > 0 then 
            (.[0] | keys_unsorted) as $keys | 
            $keys, map([.[ $keys[] ]])[] | @csv 
        else 
            "No data found for this matrix" 
        end
    ' > "${filename}"
    
    echo "    [✔] Saved to ${filename}"
}

# Execute for all three matrices
extract_to_csv "projects" "nastco_projects.csv"
extract_to_csv "milestones" "nastco_milestones.csv"
extract_to_csv "disbursements" "nastco_disbursements.csv"

echo "[*] Extraction complete."
