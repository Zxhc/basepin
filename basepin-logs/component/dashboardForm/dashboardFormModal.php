<div class="modal-container">
    <form action="" method="POST" id="form" class="main-form-modal" enctype="multipart/form-data">
        
        <div class="form-section">
            <h2>1. Terminal Inspection (Read Only)</h2>
        </div>

        <div class="form-group">
            <label for="section">Section:</label>
            <select name="section" id="section" disabled> 
                <option value="" disabled selected>Select your section</option>
                <option value="AOD">AOD</option>
                <option value="AUD">AUD</option>
                <option value="ABD 1">ABD 1</option>
                <option value="ABD 2">ABD 2</option>
                <option value="CID">CID</option>
                <option value="AED">AED</option>
                <option value="PAD">PAD</option>
            </select>
        </div>

        <div class="form-group">
            <label for="control-number">JIG/ Board Control No. :</label>
            <input type="text" id="control-number" name="control_number" readonly>
        </div>

        <div class="form-group">
            <label for="technician">Technician :</label>
            <input type="text" id="technician" name="technician_name" readonly>
        </div>

        <div class="form-group">
            <label for="item_key">Item Key :</label>
            <input type="text" id="item_key" name="item_key" readonly>
        </div>

        <div class="form-group">
            <label for="customer">Customer :</label>
            <input type="text" id="customer" name="customer" readonly>
        </div>

        <div class="form-group">
            <label for="date">Date of Verification:</label>
            <input type="date" id="date" name="date_of_verification" readonly>
        </div>

        <div class="checkbox-group full-width">
            <div class="checkbox-text">
                <p>Select Quarter:</p>
            </div>
            <div class="checkbox-items">
                <div class="status-item">
                    <input type="radio" id="q1" name="quarter" value="Q1" disabled>
                    <label for="q1">
                        <span class="hide-on-mobile">Quarter 1</span>
                        <span class="mobile-only">Q1</span>
                    </label>
                </div>
                <div class="status-item">
                    <input type="radio" id="q2" name="quarter" value="Q2" disabled>
                    <label for="q2">
                        <span class="hide-on-mobile">Quarter 2</span>
                        <span class="mobile-only">Q2</span>
                    </label>
                </div>
                <div class="status-item">
                    <input type="radio" id="q3" name="quarter" value="Q3" disabled>
                    <label for="q3">
                        <span class="hide-on-mobile">Quarter 3</span>
                        <span class="mobile-only">Q3</span>
                    </label>
                </div>
                <div class="status-item">
                    <input type="radio" id="q4" name="quarter" value="Q4" disabled>
                    <label for="q4">
                        <span class="hide-on-mobile">Quarter 4</span>
                        <span class="mobile-only">Q4</span>
                    </label>
                </div>
            </div>
        </div>


        <div class="checkbox-group full-width">
            <div class="checkbox-text">
                <p>Evidence Photos:</p>
            </div>
            
            <div class="upload-container">
                <div class="upload-box">
                    <label for="photo_before">Before Verification Photo</label>
                    <input type="file" id="photo_before" disabled disabled name="photo_before" accept="image/*" onchange="previewImage(this, 'preview_before')">
                    <div id="preview_before" class="image-preview" style="cursor: pointer;>
                        <span class="preview-text">No image selected</span>
                    </div>
                </div>

                <div class="upload-box">
                    <label for="photo_after">After Verification Photo</label>
                    <input type="file" id="photo_after" disabled name="photo_after" accept="image/*" onchange="previewImage(this, 'preview_after')">
                    <div id="preview_after" class="image-preview" style="cursor: pointer;>
                        <span class="preview-text">No image selected</span>
                    </div>
                </div>
            </div>
        </div>



        <div class="checkbox-group full-width">
            <div class="checkbox-text">
                <p>Appearance Condition (Check all that Apply):</p>
            </div>

            <div class="appearance-row">
                <span class="condition-label">No Deformation / Bending</span>
                <div class="action-container">
                    <div class="status-group">
                        <div class="status-item">
                            <input type="radio" id="def_ok" name="deformation_status" value="ok" class="status-check" disabled>
                            <label for="def_ok" class="label-ok">OK</label>
                        </div>
                        <div class="status-item">
                            <input type="radio" id="def_ng" name="deformation_status" value="ng" class="status-check" disabled>
                            <label for="def_ng" class="label-ng">NG</label>
                        </div>
                    </div>
                    <input type="text" name="deformation_remarks" placeholder="Remarks" class="remarks-input" disabled>
                </div>
            </div>

            <div class="appearance-row">
                <span class="condition-label">No Corrosion / Discoloration</span>
                <div class="action-container">
                    <div class="status-group">
                        <div class="status-item">
                            <input type="radio" id="corr_ok" name="corrosion_status" value="ok" class="status-check" disabled>
                            <label for="corr_ok" class="label-ok">OK</label>
                        </div>
                        <div class="status-item">
                            <input type="radio" id="corr_ng" name="corrosion_status" value="ng" class="status-check" disabled>
                            <label for="corr_ng" class="label-ng">NG</label>
                        </div>
                    </div>
                    <input type="text" name="corrosion_remarks" placeholder="Remarks" class="remarks-input" disabled>
                </div>
            </div>

            <div class="appearance-row">
                <span class="condition-label">No Cracks / Dents</span>
                <div class="action-container">
                    <div class="status-group">
                        <div class="status-item">
                            <input type="radio" id="crack_ok" name="crack_status" value="ok" class="status-check" disabled>
                            <label for="crack_ok" class="label-ok">OK</label>
                        </div>
                        <div class="status-item">
                            <input type="radio" id="crack_ng" name="crack_status" value="ng" class="status-check" disabled>
                            <label for="crack_ng" class="label-ng">NG</label>
                        </div>
                    </div>
                    <input type="text" name="crack_remarks" placeholder="Remarks" class="remarks-input" disabled>
                </div>
            </div>

            <div class="appearance-row">
                <span class="condition-label">No Foreign Material</span>
                <div class="action-container">
                    <div class="status-group">
                        <div class="status-item">
                            <input type="radio" id="mat_ok" name="foreign_material_status" value="ok" class="status-check" disabled>
                            <label for="mat_ok" class="label-ok">OK</label>
                        </div>
                        <div class="status-item">
                            <input type="radio" id="mat_ng" name="foreign_material_status" value="ng" class="status-check" disabled>
                            <label for="mat_ng" class="label-ng">NG</label>
                        </div>
                    </div>
                    <input type="text" name="foreign_material_remarks" placeholder="Remarks" class="remarks-input" disabled>
                </div>
            </div>

            <div class="appearance-row">
                <span class="alignment-label">Proper Alignment</span>
                <div class="action-container">
                    <div class="status-group">
                        <div class="status-item">
                            <input type="radio" id="align_ok" name="alignment_status" value="ok" class="status-check" disabled>
                            <label for="align_ok" class="label-ok">OK</label>
                        </div>
                        <div class="status-item">
                            <input type="radio" id="align_ng" name="alignment_status" value="ng" class="status-check" disabled>
                            <label for="align_ng" class="label-ng">NG</label>
                        </div>
                    </div>
                    <input type="text" name="alignment_remarks" placeholder="Remarks" class="remarks-input" disabled>
                </div>
            </div>
        </div>

        <div class="form-section">
            <h2>2. Summary Findings</h2>
        </div>

        <div class="form-group">
            <label for="total-ok">Total OK:</label>
            <input type="text" id="total-ok" name="total_ok" readonly>
        </div>

        <div class="form-group">
            <label for="total-ng">Total NG:</label>
            <input type="text" id="total-ng" name="total_ng" readonly>
        </div>

        <div class="form-group">
            <label>Were there any immediate replacements required?</label>
            <div class="status-group" style="margin-top: 5px;">
                <div class="status-item">
                    <input type="radio" disabled id="replace_yes" name="replacement_required" value="yes" readonly>
                    <label for="replace_yes" disabled class="label-ok">YES</label>
                </div>
                <div class="status-item">
                    <input type="radio" id="replace_no" name="replacement_required" value="no" readonly>
                    <label for="replace_no" class="label-ng">NO</label>
                </div>
            </div>
        </div>

        <div id="replacement-details" class="checkbox-group full-width" style="display: none; border-left: 5px solid red; background-color: #fff0f0;">
            <div class="checkbox-text">
                <p>Replacement Details:</p>
            </div>
            
            <div class="main-form" style="padding: 0; box-shadow: none; background: transparent; margin-top: 0;">
                <div class="form-group">
                    <label for="terminal_part_no">Terminal Part No.:</label>
                    <input type="text" id="terminal_part_no" name="terminal_part_no" readonly>
                </div>

                <div class="form-group">
                    <label for="reason_replacement">Reason for Replacement:</label>
                    <input type="text" id="reason_replacement" name="reason_replacement" readonly>
                </div>

                <div class="form-group">
                    <label for="date_replaced">Date Replaced:</label>
                    <input type="date" id="date_replaced" name="date_replaced" readonly>
                </div>

                <div class="form-group">
                    <label for="replacement_technician">Technician:</label>
                    <input type="text" id="replacement_technician" name="replacement_technician" readonly>
                </div>

                <div class="form-group full-width">
                    <label for="change_point_no">Change Point Control No.:</label>
                    <input type="text" id="change_point_no" name="change_point_no" readonly>
                </div>
            </div>
        </div>

        <div class="button-container">
            <button type="button" id="exit" onclick="closeInspectionModal()">Exit</button>
        </div>
    </form>
</div>

<div id="imageZoomModal" style="display:none; position:fixed; z-index:9999; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.9); align-items:center; justify-content:center; flex-direction:column;">
    
    <span onclick="document.getElementById('imageZoomModal').style.display='none'" 
          style="position:absolute; top:20px; right:40px; color:white; font-size:50px; cursor:pointer; z-index:10000;">&times;</span>
    
    <div id="caption" style="position:absolute; top:20px; color:white; font-weight:bold; width:100%; text-align:center;"></div>
    
    <img id="imgFullView" src="" style="max-width: 90%; max-height: 85vh; border: 3px solid white; border-radius: 5px; object-fit: contain;">
</div>