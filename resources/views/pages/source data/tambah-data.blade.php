<x-layout>    
        <div class="container-form">
            <div class="signup-content">                
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <h2>Tambah Data Warga</h2>                        
                        <div class="form-group-full">
                            <label for="name">NIK</label>
                            <input type="text" name="name" id="name" required/>
                        </div>                            
                        </div>
                        <div class="form-group-full">
                            <label for="father_name">Nama</label>
                            <input type="text" name="father_name" id="father_name" required/>
                        </div>
                        <div class="form-group-full">
                            <label for="address">Alamat</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        <div class="form-group-full">
                            <label for="address">NO KK</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        <div class="form-group-full">
                            <label for="address">Tempat Lahir</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        <div class="form-group-full">
                            <label for="address">Tanggal Lahir</label>
                            <input type="text" name="address" id="address" required/>
                        </div>

                        <div class="form-radio">
                            <label for="gender" class="radio-label">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadiosc" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                  Sudah
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadiosc" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                  Belum
                                </label>
                              </div>   
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="gridRadiosc" id="gridRadios2" value="option2">
                                  <label class="form-check-label" for="gridRadios2">
                                    Pernah
                                  </label>
                                </div>     
                        </div>

                        <div class="form-radio">
                            <label for="status-perkawinan" class="radio-label">Status Perkawinan</label>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                              <label class="form-check-label" for="gridRadios1">
                                Sudah
                              </label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                              <label class="form-check-label" for="gridRadios2">
                                Belum
                              </label>
                            </div>   
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                  Pernah
                                </label>
                              </div>                                                
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">Alamat</label>
                                <div class="form-select">
                                    <select name="state" id="state">
                                        <option value=""></option>
                                        <option value="mg">Manggungmangu</option>
                                        <option value="pn">Parakan</option>
                                        <option value="tm">Tambirejo</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group-rw">
                                <label for="city">RW</label>
                                <div class="form-select">
                                    <select name="city" id="city">
                                        <option value=""></option>
                                        <option value="rw1">1</option>
                                        <option value="rw2">2</option>
                                        <option value="rw3">3</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group-rt">
                                <label for="city">RT</label>
                                <div class="form-select">
                                    <select name="city" id="city">
                                        <option value=""></option>
                                        <option value="rt1">1</option>
                                        <option value="rt2">2</option>
                                        <option value="rt3">3</option>
                                        <option value="rt4">4</option>
                                        <option value="rt5">5</option>
                                        <option value="rt6">6</option>
                                        <option value="rt7">7</option>
                                        <option value="rt8">8</option>
                                        <option value="rt9">9</option>
                                        <option value="rt10">10</option>
                                        <option value="rt11">11</option>
                                        <option value="rt12">12</option>
                                        <option value="rt13">13</option>
                                        <option value="rt14">14</option>
                                        <option value="rt15">15</option>
                                        <option value="rt16">16</option>
                                        <option value="rt17">17</option>
                                        <option value="rt18">18</option>
                                        <option value="rt19">19</option>
                                        <option value="rt20">20</option>
                                        <option value="rt21">21</option>
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </div>     
                        <div class="form-submit">
                            <input type="submit" value="Kembali" class="kembali" name="kembali" id="kembali " />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>    
</x-layout>