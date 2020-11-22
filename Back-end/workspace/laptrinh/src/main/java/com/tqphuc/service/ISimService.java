package com.tqphuc.service;

import java.util.List;

import com.tqphuc.model.SimModel;

public interface ISimService {
	List<SimModel> findAll();
	SimModel save(SimModel simModel);
}
