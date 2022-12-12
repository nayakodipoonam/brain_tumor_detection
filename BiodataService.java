package com.springbootdb.springbootdb.services;
import com.springbootdb.springbootdb.entities.Biodata;

import java.util.*;

public interface BiodataService {
    public List<Biodata> getbiodata();

    public Biodata getbiodatabyId(long id);

    public Biodata addbiodata(Biodata biodata);
}
