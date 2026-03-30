<div class="form-container">
<form action="submit" method="POST" class="main-form">
            <div class="form-group">
                <label for="section">Section:</label>
                <select name="section" id="section" required>
                    <option value="" disabled selected>Select your section</option>
                    <option value="section_a">Section A</option>
                    <option value="section_b">Section B</option>
                    <option value="section_c">Section C</option>
                </select>
            </div>

            <div class="form-group">
                <label for="control-number">JIG/ Board Control No. :</label>
                <input type="text">
            </div>

             <div class="form-group">
                <label for="technician">Technician :</label>
                <input type="text">
            </div>

             <div class="form-group">
                <label for="date">Date of Verification:</label>
                <input type="date" id="date" name="date" required>
            </div>
               
                 <div class="checkbox-group">
                    <div class="checkbox-text"><p>Select Quarter:</p></div>
                    <div class="checkbox-items">
                       
                        <label for="q1"><span class="hide-on-mobile">Quarter 1</span><span class="mobile-only">Q1</span></label>
                         <input type="checkbox" id="q1" name="quarter" value="Q1">
                        
                        
                        <label for="q2"><span class="hide-on-mobile">Quarter 2</span><span class="mobile-only">Q2</span></label>
                        <input type="checkbox" id="q2" name="quarter" value="Q2">
                        
                        
                        <label for="q3"><span class="hide-on-mobile">Quarter 3</span><span class="mobile-only">Q3</span></label>
                        <input type="checkbox" id="q3" name="quarter" value="Q3">
                        
                        
                        <label for="q4"><span class="hide-on-mobile">Quarter 4</span><span class="mobile-only">Q4</span></label>
                        <input type="checkbox" id="q4" name="quarter" value="Q4">
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
                    <input type="checkbox" id="def_ok" name="def_status" value="ok">
                    <label for="def_ok" class="label-ok">OK</label>
                </div>
                <div class="status-item">
                    <input type="checkbox" id="def_ng" name="def_status" value="ng">
                    <label for="def_ng" class="label-ng">NG</label>
                </div>
            </div>
            <div class="remarks-group">
                <input type="text" name="def_remarks" placeholder="Remarks for Deformation" class="remarks-input">
            </div>
        </div>
    </div>

    <div class="appearance-row">
        <span class="condition-label">No Corrosion / Discoloration</span>
        <div class="action-container">
            <div class="status-group">
                <div class="status-item">
                    <input type="checkbox" id="corr_ok" name="corr_status" value="ok">
                    <label for="corr_ok" class="label-ok">OK</label>
                </div>
                <div class="status-item">
                    <input type="checkbox" id="corr_ng" name="corr_status" value="ng">
                    <label for="corr_ng" class="label-ng">NG</label>
                </div>
            </div>
            <div class="remarks-group">
                <input type="text" name="corr_remarks" placeholder="Remarks for Corrosion" class="remarks-input">
            </div>
        </div>
    </div>

    <div class="appearance-row">
        <span class="condition-label">No Cracks / Dents</span>
        <div class="action-container">
            <div class="status-group">
                <div class="status-item">
                    <input type="checkbox" id="crack_ok" name="crack_status" value="ok">
                    <label for="crack_ok" class="label-ok">OK</label>
                </div>
                <div class="status-item">
                    <input type="checkbox" id="crack_ng" name="crack_status" value="ng">
                    <label for="crack_ng" class="label-ng">NG</label>
                </div>
            </div>
            <div class="remarks-group">
                <input type="text" name="crack_remarks" placeholder="Remarks for Cracks" class="remarks-input">
            </div>
        </div>
    </div>

    <div class="appearance-row">
        <span class="condition-label">No Foreign Material</span>
        <div class="action-container">
            <div class="status-group">
                <div class="status-item">
                    <input type="checkbox" id="mat_ok" name="mat_status" value="ok">
                    <label for="mat_ok" class="label-ok">OK</label>
                </div>
                <div class="status-item">
                    <input type="checkbox" id="mat_ng" name="mat_status" value="ng">
                    <label for="mat_ng" class="label-ng">NG</label>
                </div>
            </div>
            <div class="remarks-group">
                <input type="text" name="mat_remarks" placeholder="Remarks for Materials" class="remarks-input">
            </div>
        </div>
    </div>
</div>
            <br>

            
        </form>
</div>